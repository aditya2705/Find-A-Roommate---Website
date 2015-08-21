 <?php //$page='roommate' ;
//require('include/sd.php');
session_start();
    unset ($_SESSION['a']);
	unset ($_SESSION['b']);
	unset ($_SESSION['p1']);
	unset ($_SESSION['p2']);
	unset ($_SESSION['p3']);
	unset ($_SESSION['p4']);
	unset ($_SESSION['g3']);
	unset ($_SESSION['g1']);
	unset ($_SESSION['g2']);
	unset ($_SESSION['partial']);
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
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
	    <!-- Custom CSS -->
	<link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/form1.css" rel="stylesheet">
	
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    
    
    <script>

function updateTextArea() {         

    var allVals = "";

    $('#test input[type=checkbox]:checked').each(function() {

        currentName = $(this).attr("name");
        currentVal  = $(this).val();

        allVals = allVals.concat( (allVals == "") ? currentName + "=" + currentVal : "&" + currentName + "=" + currentVal );

    });

    $.ajax({
        type:'POST',
        url:'getRoom3.php',
        data: allVals,
        dataType: "html",
        success: function(data){
            $('#results').html(data);
        }
    });

  }

$(document).ready(function() {

   $('#test input[type=checkbox]').click(updateTextArea);

   updateTextArea();  

});

</script>
    
    
    
    <script> $(function() { $( "#content_panel" ).tabs(); }); </script>
    <link rel="stylesheet" href="css/slider.css">
    <script>
		$(document).ready(function(){
			$('#showMore').click(function(e){
				e.preventDefault();
				$('#filter').toggle();
			})
		})
	</script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    
    
	

<script>
	$(function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 20000000,
			values: [ 75, 10000000 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "INR " + ui.values[ 0 ] + " - INR " + ui.values[ 1 ] );
				getEvent1(ui.values[0],ui.values[1]);
				//getEvent2("search".value,ui.values[0],ui.values[1]);
			}
		});
		$( "#amount" ).val( "INR " + $( "#slider-range" ).slider( "values", 0 ) +
			" - INR " + $( "#slider-range" ).slider( "values", 1 ) );
			getEvent1($( "#slider-range" ).slider( "values", 0 ),$( "#slider-range" ).slider( "values", 1 ));
				
	});
	</script>
   
    
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
    
    <script>
	function getEvent1(value1,value2)
	{
		$.post("getRoom3.php",{a:value1,b:value2},function(data){
        $("#results").html(data);
		});
	}
	
	</script>
    
  
    <script>
	function getEvent(value)
	{
		$.post("getRoom3.php",{partial:value},function(data){
        $("#results").html(data);
		});
	}
	</script>
   
</head>

<body>

<?php require('include/pop.php'); ?>

    <!-- Navigation -->
 
    <?php require('include/nav.php'); ?>
            
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">
	<div id="container-box">
    	<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Refine Search<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
		<li>
			<div class="input-group">
            <form method="get" name="form1">
				<input type="text" class="form-control" name="search" onkeyup="getEvent(this.value)" style="width:200px;">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Show</button>
				</span>
			</div><!-- /input-group -->
  
		</li>
          <li><a>Cost</a>
          		
				<br/><p><form method="get" name="form1">
						<label for="amount">Price range:</label>
						<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					</p>
    
					<div id="slider-range"></div>
                    
				</li><br/>
                <div id="test">
          <li><a href="" id="showMore">More Filters</a></li>
		  <div id="filter"> 
                        <span>Furnished:</span><br/>
                        <input type="checkbox" id="g1" name="g1" value="Fully-furnished"><span id="genderStyle" style="padding-right:7px">Fully-furnished</span>
						<input type="checkbox" id="g2" name="g2" value="Semi-furnished"><span id="genderStyle" style="padding-right:67px">Semi-furnished</span>
						<input type="checkbox" id="g3" name="g3" value="Non-furnished"><span id="genderStyle" style="padding-right:57px">Non-furnished</span>
                        <br/><br/>
                        <span>Apartment Type:</span><br/>
                        <input type="checkbox" id="p1" name="p1" value="1 RK"><span id="genderStyle" style="padding-right:15px">1 RK</span>
						<input type="checkbox" id="p2" name="p2" value="1 BHK"><span id="genderStyle" style="padding-right:15px">1 BHK</span>
                        <input type="checkbox" id="p3" name="p3" value="2 BHK"><span id="genderStyle" style="padding-right:15px">2 BHK</span><br/><br/> 
                        <input type="checkbox" name="p4"id="p4" value="3 BHK"><span id="genderStyle" style="padding-right:15px">3 BHK and above</span>
                        
                        </div>
                        </br>
                        </br>
                        
                    </form></div></div>
          </ul>
      </div>
          <div id="pseudo-sidebar"></div>
	</div>	
      <!-- Page content -->
      <div class="col-md-9">






                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				
                
                <div id="results"></div>
                

                    

                </div>

            </div>
	</div>
    </div>
    
   
    
	
	

	


</body>
<script src="js/slider1.js"></script>
<script src="js/slider2.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
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
<link href="css/style.css" rel="stylesheet">
</html>
