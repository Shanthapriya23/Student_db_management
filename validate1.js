function validate_details(){
    var stu_name = document.getElementById("stu_name").value;
    var stu_id = document.getElementById("univ_reg_no").value;
    var address = document.getElementById("address").value;
    var father_name = document.getElementById("father_name").value;
    var mobile = document.getElementById("mobile").value;
    
    var errorMessage = "";//appending all the multiple error messages into one single alert message
    if(stu_name == "") errorMessage += "student Name cannot be blank\n";
    if(stu_id == "") errorMessage += "register number cannot be blank\n";
    if(father_name == "") errorMessage += "father Name or guardian name is a mandatory firld\n";
    if(address == "") errorMessage += "address cannot be blank\n";
    if(mobile == "") errorMessage += "mobile number cannot be blank\n";


    if(errorMessage != "")
  //if there are errors and not all the inputs gn by user are correct then the finally appended error message will be displayed as alert message.
    alert(errorMessage);
    else {
        var sum = "Form Summary" +
          "\nstudent Name: " + stu_name+ 
          "\nfather Name: " + father_name+ 
          "\nregister number: " + stu_id +
          "\nAddress: " + address + 
          "\nmobile: " + mobile;
        alert(sum);

        document.stu_details.submit();
      }
      return false;

}
