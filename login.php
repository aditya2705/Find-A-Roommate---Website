<?php 

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username= $_REQUEST['username'];
	$pass= $_REQUEST['password'];
	
require('include/connect.php');
			$pass= md5(md5('bhaiya'.$pass.'codu'));  
			$query = "SELECT username,password,id,rid,bid,oid from customer where username= '{$username}' AND password= '{$pass}' ";  
			$query= mysql_query($query);
			
			$numrows = mysql_num_rows($query);
			if($numrows == 1)
			{
				$row = mysql_fetch_assoc($query);
				session_start();
				$_SESSION['uid']=$row['id'];
				$_SESSION['rid']=$row['rid'];
				$_SESSION['bid']=$row['bid'];
				$_SESSION['oid']=$row['oid'];
				$_SESSION['uname']=$row['username'];
				echo "1";
			}
			else
			{
				echo "0";
			}		
}
?>
