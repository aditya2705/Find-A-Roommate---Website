<?php 
//session_start();
if(($GLOBALS['page'] =! 'roommate')){
	unset ($_SESSION['a']);
	unset ($_SESSION['b']);
	unset ($_SESSION['p1']);
	unset ($_SESSION['p2']);
	unset ($_SESSION['p3']);
	unset ($_SESSION['p4']);
	unset ($_SESSION['p5']);
	unset ($_SESSION['g1']);
	unset ($_SESSION['g2']);
	unset ($_SESSION['partial']);
	//$_SESSION['partial']='';
}
?> 