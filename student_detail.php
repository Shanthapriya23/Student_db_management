<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <TITLE>STUDENT'S PERSONEL DETAIL RECORDS</TITLE>
        <script src="./validate1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css">
        
    </head>
<body>
<H1>STUDENT'S PERSONEL DETAIL RECORDS</H1>
<?php
  include("menu.php");
?>
<form name='stu_details' action="#" method="post">
<fieldset>
  <label for="univ_reg_no">UNIVERSITY REGISTER NUMBER:</label>
  <input type="text" id="univ_reg_no" name="univ_reg_no"><br>
  <label for="stu_name">STUDENT NAME:</label>
  <input type="text" id="stu_name" name="stu_name"><br>
  <label for="address">ADDRESS:</label>
  <input type="text" id="address" name="address"><br>
  <label for="father_name">FATHER'S NAME</label>
  <input type="text" id="father_name" name="father_name"><br>
  <label for="mobile">MOBILE NUMBER:</label>
  <input type="text" id="mobile" name="mobile"><br>

  <input type="button" id="button" value="Submit" onclick="validate_details()">
</fieldset>

<?php
if (isset($_POST["stu_name"]) && isset($_POST["univ_reg_no"]) && isset($_POST["father_name"]) && isset($_POST["address"]) && isset($_POST["mobile"])){
  $stu_name=$_POST["stu_name"];
  $stu_id=$_POST["univ_reg_no"];
  $father_name=$_POST["father_name"];
  $address=$_POST["address"];
  $mobile=$_POST["mobile"];
  //echo "$stu_name <br> $stu_id <br> $father_name <br> $address<br> $mobile";

  $ins_stmt="INSERT INTO student_details(univ_reg_no,stu_name,address,father_name,mobile)
  VALUES($stu_id,'$stu_name','$address','$father_name','$mobile')";
  include("DB_CONN.php");

  $stmt=mysqli_prepare($conn,$ins_stmt);
  mysqli_stmt_execute($stmt);
  echo "record saved successfuly";

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
?>
</form>
</body>
</html>



