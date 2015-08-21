<?php 
require('include/connect.php');
$n=$_POST['n1'].$_POST['n2'];
echo $n;

$dob=$_POST['Birthday_day']."-".$_POST['Birthday_Month']."-".$_POST['Birthday_Year'];
$mn=$_POST['mn'];
$sex1=$_POST['sex1'];
$married1=$_POST['married1'];
$religion1=$_POST['religion1'];
$afford1=$_POST['afford1'];
$city=$_POST['city'];
$lang1=$_POST['lang1'];
$p=$_POST['profession1'];

$query="insert into roomates(dob,name,affordance,profession,location,gender,culture,maritalStatus,language) values('$dob','$n','$afford1','$p','$city','$sex1','$religion1','$married1','$lang1');";
$result=mysql_query($query);

	//echo "registered successfully";


$msg="registered successfully";
session_start();
$_SESSION["msg"]=$msg;
header('location:index.php');
?>