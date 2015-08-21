<?php 
session_start();
require('include/connect.php');
?>

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
 
<link href="css/room.css" rel="stylesheet">
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
<?php 
if(isset($_GET['bid'])){
$bid=$_GET['bid'];
$query="select * from bs where bid={$bid}";
}
else{
$oid=$_GET['oid'];
$query="select * from rent where oid={$oid}";
}
$results= mysql_query($query);
$row = mysql_fetch_assoc($results);
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>
<div class="room-thumbnails">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-toggle="modal" data-target="#myModal">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-toggle="modal" data-target="#myModal">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-toggle="modal" data-target="#myModal">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-toggle="modal" data-target="#myModal">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            
</div>    

<div class="room-content">
<div class="col-lg-12">
<h3>Room Info.</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><div class="panel-heading">
                            <h4 class="panel-title">
                                Owner
                            </h4>
                        </div></a>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                               Name:<?php echo $row['name']; ?></br>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><div class="panel-heading">
                            <h4 class="panel-title">
                                Room Address
                            </h4>
                        </div></a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                               <?php echo $row['roomAddress']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><div class="panel-heading">
                            <h4 class="panel-title">
                                Rental Particulars
                            </h4>
                        </div></a>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $row['rental_particulars']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><div class="panel-heading">
                            <h4 class="panel-title">
                                Residency clauses
                            </h4>
                        </div></a>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                               <?php echo $row['clauses']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->


</div>


        
        </div>
		

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="http://placehold.it/1000x600" class="img-responsive">
        </div>
    </div>
  </div>
</div>

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
    <link href="css/room.css" rel="stylesheet">

</html>
