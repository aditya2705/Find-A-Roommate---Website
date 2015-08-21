<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
error_reporting(E_ALL^E_NOTICE);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
			$name=$_POST['name'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			//$cpassword=$_POST['cpassword'];
			

			$link=mysql_connect('localhost','root','');
			if(!$link) {
				die('Connection failed: ' . mysql_error());
			}
			$db = mysql_select_db('wt');
			if(!$db) {
				die('Selected database unavailable: ' . mysql_error());
			}
			$password = md5(md5('bhaiya'.$password.'codu')); 

			$sql = "insert into customer(name,username,password) values('$name','$username','$password')";


			$result = mysql_query($sql);
			if($result<>0){
			//echo "Registered";
			header('location:signNext.php');
			}
			else{
				echo"nahi hua";}
			
			
		}
}
?>





</body>
</html>