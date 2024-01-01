<?php
include("menu.php");
if (isset($_POST["stu_name"]) && isset($_POST["univ_reg_no"]) && isset($_POST["father_name"]) && isset($_POST["address"]) && isset($_POST["mobile"])){
  $stu_name=$_POST["stu_name"];
  $stu_id=$_POST["univ_reg_no"];
  $father_name=$_POST["father_name"];
  $address=$_POST["address"];
  $mobile=$_POST["mobile"];
  //echo "$stu_name <br> $stu_id <br> $father_name <br> $address<br> $mobile";

  $ins_stmt="UPDATE student_details SET stu_name='$stu_name',address='$address',father_name='$father_name',mobile='$mobile' WHERE univ_reg_no=$stu_id";
  
  include("DB_CONN.php");

  $stmt=mysqli_prepare($conn,$ins_stmt);
  mysqli_stmt_execute($stmt);
  echo "record saved successfuly";

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
?>