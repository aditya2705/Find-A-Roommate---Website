<?php
    //require_once './session.php';
	session_start();
	function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}
	
    if(isset($_SESSION)){
        unset($_SESSION);
        session_destroy();
    }
    redirect_to("index.php");
?>
