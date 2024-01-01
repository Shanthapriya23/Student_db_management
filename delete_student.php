<?php
include("menu.php");
if (isset($_GET["univ_reg_no"])){
  $stu_id=$_GET["univ_reg_no"];
  

  $ins_stmt="DELETE FROM student_details WHERE univ_reg_no=$stu_id" ;
  
  include("DB_CONN.php");

  $stmt=mysqli_prepare($conn,$ins_stmt);
  mysqli_stmt_execute($stmt);
  echo "record deleted successfuly";

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
?>