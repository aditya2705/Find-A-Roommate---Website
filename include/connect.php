
<?php
$link=mysql_connect('localhost','root','');
if(!$link) {
die('Connection failed: ' . mysql_error());
}
$db = mysql_select_db('wt');
if(!$db) {
die('Selected database unavailable: ' . mysql_error());
}
?>
