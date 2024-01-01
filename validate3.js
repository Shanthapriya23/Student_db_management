function validate_display()
{
    var stu_name = document.getElementById("stu_name").value;
    var stu_id = document.getElementById("univ_reg_no").value;
    
    
    var errorMessage = "";//appending all the multiple error messages into one single alert message
    if(stu_name == "" && stu_id=="") errorMessage = "enter atleast one field\n";
    


    if(errorMessage != "")
  //if there are errors and not all the inputs gn by user are correct then the finally appended error message will be displayed as alert message.
    alert(errorMessage);
    else {
        var summary = "Form Summary" +
          "\nstudent Name: " + stu_name+ 
          "\nregister number: " + stu_id ;
        alert(summary);
        document.search_form.submit();
      }
      return false;
    }