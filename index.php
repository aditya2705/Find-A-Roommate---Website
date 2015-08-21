<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Find A Roommate</title>
	
	<link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/themes/css/cartodb.css" />
	
	<style>
	 #map{
        height: 300px;
		width:100%;
		min-width:600px;
        padding: 0;
        margin: 0;
      }
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    
	<link href="css/logo-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/themes/css/cartodb.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!--<script src="http://libs.cartocdn.com/cartodb.js/v3/cartodb.js"></script>-->
<script type="text/javascript">
$(document).ready(function(){
	$('#username').focus(); // Focus to the username field on body loads
	$('#login').click(function(){ // Create `click` event function for login
		var username = $('#usernam'); // Get the username field
		
		var password = $('#passwor'); // Get the password field
		/*var user=$('#usernam').val();
        var pwd=$('#passwor').val();*/
		var login_result = $('.login_result'); // Get the login result div
		//alert(password.val());alert(username.val());
		login_result.html('loading..'); // Set the pre-loader can be an animation
		if(username.val() == ''){ // Check the username values is empty or not
			username.focus(); // focus to the filed
			login_result.html('<span class="error">*Enter the username</span>');
			return false;
		}
		if(password.val() == ''){ // Check the password values is empty or not
			password.focus();
			login_result.html('<span class="error">*Enter the password</span>');
			return false;
		}
		if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
			//var UrlToPass = 'action=login&username='+username.val()+'&password='+password.val();
			var UrlToPass = 'username='+username.val()+'&password='+password.val();
			$.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
			type : 'POST',
			data : UrlToPass,
			
			//dataType: 'html',
			//data:{"username":username,"password":password},
			url  : 'login.php',
			success: function(responseText){ // Get the result and asign to each cases
				//var r= responseText;
				if(responseText ==0){
					login_result.html('<span class="error">*Username or Password Incorrect!</span>');
				}
				else if(responseText == 1){
					window.location = 'index.php';
				}
				else{
					alert('Problem with sql query');
					//alert(responseXML);
					//alert("aaya");
					login_result.html(responseText);
					alert(responseText);
				}
			}
			});
		}
		return false;
	});
	
	$('#register').click(function(){
	var fname= $('#fullname'); 
	var pass1=$('#p1'); 
	var pass2=$('#p2'); 
	var email=$('#registeremail'); 
	var filter2 = /^[a-zA-Z]+$/;
	var filter1= /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
	var login_result= $('.result');
	if(fname.val() == ''||!((fname.val()).match(filter2))){ // Check the username values is empty or not
			fname.focus(); // focus to the filed
			login_result.html('<span>*invalid name</span>');
			return false;
		}
	if(email.val() == ''||!((email.val()).match(filter1))){ // Check the username values is empty or not
			email.focus(); // focus to the filed
			login_result.html('<span>*Invalid email id</span>');
			return false;
		}	
	
	if(pass1.val() == ''){
		pass1.focus();
		login_result.html('<span>Enter password</span>');
			return false;
	}		
	if(pass2.val()=='' || (pass1.val()!=pass2.val())){
		pass2.focus();
		login_result.html('<span>*Passwords dont match</span>');
			return false;
	}
	
});
	
	
});
</script>
</script>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
 <style>
	 #map{
        height: 300px;
		width:100%;
		min-width:600px;
        padding: 0;
        margin: 0;
      }
    </style>
	<script>
	function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
	</script>

</head>

<body>


	<?php require('include/pop.php'); ?>

    <!-- Navigation -->
 
    <?php require('include/nav.php'); ?>
    
     
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

	<div id="map"></div>
	

               <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
            <div id="msg"><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);}?></div>
                <div class="well text-center">
                    Because every year more than 3 million people start their flatshare journey on our site to find a happy home. Join now!
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
		
		<!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>SELL/RENT ROOMS</h2>
                <p>Looking for Property?</p><p> Buy, Sell & Rent property at findaroommate.com, India's leading Real Estate online real estate portal.</p>
                <a class="btn btn-default" href="formexpSell.php" style="margin-top:12px;">Sell/Rent Rooms</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>SEARCH ROOMS</h2>
                <p>If you are looking for a room on rent then find a roommate is the ideal place to start! Mumbai House share profiles, rooms to let and flatshare ads are moderated manually and updated daily so you can be confident the site is always up to date.</p>
                <a class="btn btn-default" href="formexp1.php">Search Rooms</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>SEARCH ROOMMATES</h2>
                <p>We are the worlds largest Roommate site and been around for the last 20 years, so we now have a huge choice of Room Shares ads and thousands of Roommates in . With us, you can be sure of a quick and safe search.</p>
                <a class="btn btn-default" href="formexp.php">Search Roommates</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
</body>
<script src="http://libs.cartocdn.com/cartodb.js/v3/cartodb.js"></script>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
<script>
// get the viz.json url from the CartoDB Editor
// - click on visualize
// - create new visualization
// - make visualization public
// - click on publish
// - go to API tab

window.onload = function() {
  cartodb.createVis('map', 'http://alpha.cartodb.com/api/v2/viz/1dac8c56-4889-11e4-8b21-0e4fddd5de28/viz.json');
}
</script>
 <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>
