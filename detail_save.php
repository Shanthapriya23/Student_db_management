<?php
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
?>

