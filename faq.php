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
<link href="css/faqwa.css" rel="stylesheet">
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

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
			<ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">FAQs</a></li>
                </ol>
			
                <h1 class="page-header">FAQs
                </h1>
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><div class="panel-heading">
                            <h4 class="panel-title">
                                What does it cost?
                            </h4>
                        </div></a>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Basic membership is FREE. As a basic member you can add a profile, browse your matches and send RoomMail messages. In order to read messages received from other members, you must become a Choice Member. Fees for Choice Membership are as follows: $5.99 for our 3 day trial, $19.99 for 30 days, and $29.99 for 60 days. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><div class="panel-heading">
                            <h4 class="panel-title">
                                How does it work?
                            </h4>
                        </div></a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                It's simple. Click the Get Started tab. Complete the sign up wizard. Log into the member area.Browse through your matches. If a match has roomie potential, click "contact" to send them a RoomMail message. When you receive a reply from your potential roomie, become a Choice Member. Shack up, and live happily ever after. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><div class="panel-heading">
                            <h4 class="panel-title">
                                Why use findaroommate.com?
                            </h4>
                        </div>
						</a>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are no time limits.Immediate results. Browse a list of potential roommates within minutes. Free to list, browse matches and make contact. From $5.99 to read RoomMail! No phone calls. Roommates.com allows you to screen contacts. Security; we keep your personal information private. Detailed member information (including photos and maps). Automated matching system. No searching through unwanted listings. No wading through annoying advertisements Interactive and actually kind of fun! 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><div class="panel-heading">
                            <h4 class="panel-title">
                                Do you keep my personal information private?
                            </h4>
                        </div></a>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                We will post your name, address, phone number,and e-mail address. Additionally, we will never disclose your personal information to outside parties. 
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><div class="panel-heading">
                            <h4 class="panel-title">
                                I found a problem with the site, should I let you know?
                            </h4>
                        </div></a>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Software bugs are inevitable, and we need your help in squashing them. If you discover anything unusual, please contact us ASAP.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><div class="panel-heading">
                            <h4 class="panel-title">
                                I was disconnected during the sign up process, what shall I do now?
                            </h4>
                        </div></a>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                Don't worry, your information has been saved. Just log in with your user name and password and you're on your way! 
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"><div class="panel-heading">
                            <h4 class="panel-title">
                                Does findaroommate.com really work?
                            </h4>
                        </div></a>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                findaroommate.com is the #1 roommate service on the Internet, but don't take our word for it. Browse through hundreds of member testimonials and see what others have to say.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
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

 <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>
