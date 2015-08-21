<?php 
require('include/connect.php');
session_start();
$n=$_POST['n1']." ".$_POST['n2'];
echo "n=".$n."</br>";

$dob=$_POST['Birthday_day2']."-".$_POST['Birthday_Month2']."-".$_POST['Birthday_Year2'];
echo "dob=".$dob."</br>";
$mn=$_POST['mn2'];
echo "mn=".$mn."</br>";
$sex1=$_POST['sex2'];
echo "sex1=".$sex1."</br>";
$ad=$_POST['address'];
echo "ad=".$ad."</br>";
$city=$_POST['city2'];
echo "city=".$city."</br>";
$type=$_POST['room2'];
echo "type=".$type."</br>";
$price=$_POST['price'];
echo "price=".$price."</br>";
$fur=$_POST['furnish2'];
echo "fur=".$fur."</br>";
$agent=$_POST['agent2'];
echo "agent=".$agent."</br>";

$query="insert into rent(name,roomAddress,price,city,type,furniture,rental_particulars) values('{$n}','{$ad}','{$price}','{$city}','{$type}','{$fur}','{$agent}');";
$result=mysql_query($query);
$msg="registered successfully";
$_SESSION["msg"]=$msg;
header('location:index.php');
?>