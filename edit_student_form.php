<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <TITLE>STUDENT'S PERSONEL DETAIL RECORDS</TITLE>
        <script src="./validate1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<H1>STUDENT'S PERSONEL DETAIL RECORDS</H1>
<table>
<?php
  include("menu.php");
if (isset($_GET["univ_reg_no"]))
{
  $stu_id=$_GET["univ_reg_no"];
  $stu_name="";
  $address="";
  $father_name="";
  $mobile="";

  $searchsql="SELECT * FROM student_details WHERE univ_reg_no=$stu_id ";
  
  
  include("DB_CONN.php");
  
  $result=mysqli_query($conn,$searchsql);
  while ($row=mysqli_fetch_array($result))
  {
      $stu_name= $row['stu_name'];
      $address=$row["address"];
      $father_name=$row["father_name"];
      $mobile= $row['mobile'];
  }
?>
</table>

<form name='stu_details' action="update_student.php" method="post">
<fieldset>
  <label for="univ_reg_no">UNIVERSITY REGISTER NUMBER:</label><br>
  <input type="text" id="univ_reg_no" name="univ_reg_no" readonly="true" value="<?php echo $stu_id; ?> "><br>
  <label for="stu_name">STUDENT NAME:</label><br>
  <input type="text" id="stu_name" name="stu_name" value="<?php echo $stu_name; ?>"><br>
  <label for="address">ADDRESS:</label><br>
  <input type="text" id="address" name="address" value="<?php echo $address; ?>"><br>
  <label for="father_name">FATHER'S NAME</label><br>
  <input type="text" id="father_name" name="father_name" value="<?php echo $father_name; ?>"><br>
  <label for="mobile">MOBILE NUMBER:</label><br>
  <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>"><br>


  <input type="button" id="button" value="UPDATE" onclick="validate_details()">

</fieldset>

</form>
<?php } ?>
</body>
</html>



