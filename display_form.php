<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <TITLE>STUDENT'S MARKS RECORD</TITLE>
        <script src="./validate3.js" type="text/javascript" ></script>
        <link rel="stylesheet" href="style.css">
    </head>
    </head>
<body>
<H1>ENTER YOUR DETAILS AND GET YOUR RESULTS DISPLAYED:</H1>
<?php
  include("menu.php");
?>
<form name="search_form" action="#" method="post">
<fieldset>
  <label for="univ_reg_no">UNIVERSITY REGISTER NUMBER:</label><br>
  <input type="text" id="univ_reg_no" name="univ_reg_no"><br>
  <label for="stu_name">Student NAME:</label><br>
  <input type="text" id="stu_name" name="stu_name"><br>
  

  <input type="button" id="button" value="Submit" onclick="validate_display()">

</fieldset>

<?php

$stu_name="";
$stu_id=0;
if (isset($_POST["univ_reg_no"]) && $_POST["univ_reg_no"]!=""){
  $stu_id=$_POST["univ_reg_no"];
}
if (isset($_POST["stu_name"])){
  $stu_name=$_POST["stu_name"];

}
$searchsql="SELECT * FROM student_details WHERE univ_reg_no=$stu_id or stu_name='$stu_name'";
//echo $searchsql."<br><br>";

include("DB_CONN.php");

$result=mysqli_query($conn,$searchsql);
echo "<table>";
while ($row=mysqli_fetch_array($result))
{ 
  $stu_num=$row['univ_reg_no'];
  $stu_name=$row['stu_name'];
  $address=$row["address"];
  $father_name=$row['father_name'];
  $mobile=$row['mobile'];
  echo "<tr>
  <td>REGISTER NUMBER</td>
  <td>NAME</td>
  <td>GUARDIAN'S NAME</td>
  <td>MOBILE NUMBER</td>
  <td>ADDRESS</td>";
  echo "<tr>";
  echo "<td>$stu_num</td>
  <td>$stu_name</td>
  <td>$father_name</td> <td>$mobile</td> 
  <td>$address</td> 
  <td> <a href='edit_student_form.php?univ_reg_no=$stu_num'>EDIT</a> </td>
  <td><a href='delete_student.php?univ_reg_no=$stu_num'>DELETE</a></td>";
  echo "</tr>";
}
echo "</table>";
?>
</form>
</body>
</html>
