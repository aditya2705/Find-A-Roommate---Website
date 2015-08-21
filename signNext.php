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

	
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    
	<link href="css/logo-nav.css" rel="stylesheet">
	<script src="js/modernizr.custom.js"></script>

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
	
	
	$('.btn-modal1').click(function(){ // Create `click` event function for login
		var firstname = $('#firstname1'); // Get the firstname field
		
		var lastname = $('#lastname1'); // Get the lastname field
		
		var date_day = $('#Birthday_Day1');
		
		var date_month = $('#Birthday_Month1');
		
		var date_year = $('#Birthday_Year1');
		
		var mobile = $('#mobile1');
		
		var filter1 = /^[7-9][0-9]{10}$/;
		
		var filter2 = /^[a-zA-Z]+$/;
		
		var state = $('#state1');
		
		var login_result = $('.alert'); // Get the login result div
		//alert(password.val());alert(firstname.val());
		if(firstname.val() == ''||!((firstname.val()).match(filter2))){ // Check the username values is empty or not
			firstname.focus(); // focus to the filed
			login_result.html('<span>Enter first name</span>');
			return false;
		}
		if(lastname.val() == ''||!((lastname.val()).match(filter2))){ // Check the password values is empty or not
			lastname.focus();
			login_result.html('<span>Enter last name</span>');
			return false;
		}
		if(date_day.val() == -1){ // Check the password values is empty or not
			date_day.focus();
			login_result.html('<span>Select Birth Day</span>');
			return false;
		}
		if(date_month.val() == -1){ // Check the password values is empty or not
			date_month.focus();
			login_result.html('<span>Select Birth Month</span>');
			return false;
		}
		if(date_year.val() == -1){ // Check the password values is empty or not
			date_year.focus();
			login_result.html('<span>Select Birth Year</span>');
			return false;
		}
		if(mobile.val().length!=10){ // Check the password values is empty or not
			mobile.focus();
			login_result.html('<span>Invalid Number</span>');
			return false;
		}
		if(state.val() == ''){ // Check the password values is empty or not
			state.focus();
			login_result.html('<span>Enter State</span>');
			return false;
		}
		
		
	});
	
	
	$('.btn-modal2').click(function(){ // Create `click` event function for login
		var firstname = $('#firstname2'); // Get the firstname field
		
		var lastname = $('#lastname2'); // Get the lastname field
		
		var date_day = $('#Birthday_Day2');
		
		var date_month = $('#Birthday_Month2');
		
		var date_year = $('#Birthday_Year2');
		
		var mobile = $('#mobile2');
		
		var filter1 = /^[7-9][0-9]{10}$/;
		
		var filter2 = /^[a-zA-Z]+$/;
		
		var filter3 = /^[0-9]{9}$/;
		
		var add_regex = /^[0-9a-zA-Z]+$/;
		
		var state = $('#state2');
		
		var address = $('#textarea2');
		
		var cost = $('#cost2');
		
		var login_result = $('.alert'); // Get the login result div
		//alert(password.val());alert(firstname.val());
		if(firstname.val() == ''||!((firstname.val()).match(filter2))){ // Check the username values is empty or not
			firstname.focus(); // focus to the filed
			login_result.html('<span>Enter first name</span>');
			return false;
		}
		if(lastname.val() == ''||!(lastname.val()).match(filter2)){ // Check the password values is empty or not
			lastname.focus();
			login_result.html('<span>Enter last name</span>');
			return false;
		}
		if(date_day.val() == -1){ // Check the password values is empty or not
			date_day.focus();
			login_result.html('<span>Select Birth Day</span>');
			return false;
		}
		if(date_month.val() == -1){ // Check the password values is empty or not
			date_month.focus();
			login_result.html('<span>Select Birth Month</span>');
			return false;
		}
		if(date_year.val() == -1){ // Check the password values is empty or not
			date_year.focus();
			login_result.html('<span>Select Birth Year</span>');
			return false;
		}
		if(mobile.val().length!=10){ // Check the password values is empty or not
			mobile.focus();
			login_result.html('<span>Invalid Number</span>');
			return false;
		}
		if(state.val() == ''){ // Check the password values is empty or not
			state.focus();
			login_result.html('<span>Enter State</span>');
			return false;
		}
		if(address.val() == ''){ // Check the password values is empty or not
			address.focus();
			login_result.html('<span>Enter Address</span>');
			return false;
		}
		if(cost.val() == ''||!filter3.test(cost.val())){ // Check the password values is empty or not
			cost.focus();
			login_result.html('<span>Invalid Amount</span>');
			return false;
		}
		
		
	});
	
});
</script>
</script>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />

<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/formNext.css" />

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
        
        <!-- /.row -->
		<div class="image-icons">
		<div class="row">
            <div class="col-lg-12">
			<ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Advance Sign In</li>
                </ol>
                
            </div>
        </div>
		
		</div>
		
		</div>
		
		
			<ul class="grid cs-style-3" style="width:80%; margin: 0 auto">
				<li>
					<figure>
						<img src="images/4.png" alt="img04" style="width:538px;">
						<figcaption>
							<h3>Roommate</h3>
							<span>A potential roommate</span>
							<a href="#form1Modal">Register</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/1.png" alt="img01" style="width:538px;">
						<figcaption>
							<h3>Owner</h3>
							<span>A potential owner</span>
							<a href="#form2Modal">Register</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/2.png" alt="img02" style="width:538px;">
						<figcaption>
							<h3>Buyer</h3>
							<span>A potential buyer</span>
							<a href="#form1Modal">Register</a>
						</figcaption>
					</figure>
				</li>
				
			</ul>
			
						
			
		
		
		<div id ="form1Modal" class = "modalDialog">
		
		<div>
		<a href="#close" title="Close" class="close">Close</a>
        
        
<form role="form" class="form" name = "form1" method="post" action="roomForm1.php">
  <h2>Roommate Registration</h2>
    <div class="form-group">
      <label for="firstname1" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="n1" id="firstname1" placeholder="Enter First Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="lastname1" class="col-md-2">
        Last Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="n2" id="lastname1" placeholder="Enter Last Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="birthday1" class="col-md-2" style="margin-top: 25px;
padding-bottom: 23px;">
        Date of Birth:
      </label>
      <div class="col-md-10">
        <select name="Birthday_day" id="Birthday_Day1" class="form-control" style="width:100px; padding-right:5px; float:left;">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month1" name="Birthday_Month" class="form-control" style="width:100px; padding-right:5px; float:left;">
<option value="-1">Month:</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year1" class="form-control" style="width:100px; padding-right:5px; float:left;">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
      </div>
 
 
    </div>
 
 
 <div class="form-group">
      <label for="mobile1" class="col-md-2" style="margin-top: 14px;
padding-bottom: 19px;">
        Mobile Number:
      </label>
      <div class="col-md-10" >
        <input type="text" class="form-control" id="mobile1" placeholder="Example: 8989898989" name="mn" style="width:250px;">
      </div>
	  
</div>
    
 
   <div class="form-group">
      <label for="sex1" class="col-md-2" style="margin-top: 14px;
padding-bottom: 9px;">
        Gender:
      </label>
      <div class="col-md-10">
        <select name="sex1" id="sex1" class="form-control" style="width:200px;">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
    </div>
	
	
	<div class="form-group">
      <label for="married1" class="col-md-2" style="margin-top: 22px;
padding-bottom: 9px;">
        Marital Status:
      </label>
      <div class="col-md-10">
        <select name="married1" id="married1" class="form-control" style="width:200px;">
          <option value="Single">Unmarried</option>
          <option value="Married">Married</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <label for="profession1" class="col-md-2" style="margin-top: 25px;
padding-bottom: 12px;">
        Profession:
      </label>
      <div class="col-md-10">
        <select name="profession1" id="profession1" class="form-control" style="width:200px;">
          <option value="Single">Engineer</option>
          <option value="Married">Doctor</option>
          <option value="Single">Teacher</option>
          <option value="Married">Student</option>
          <option value="Single">Others</option>
        </select>
      </div>
    </div>
	
	
	<div class="form-group">
      <label for="religion1" class="col-md-2" style="margin-top: 22px;
padding-bottom: 9px;">
        Religion:
      </label>
      <div class="col-md-10">
        <select name="religion1" id="religion1" class="form-control" style="width:200px;">
          <option value="Hindu">Hindu</option>
          <option value="Muslim">Muslim</option>
		   <option value="Sikh">Sikh</option>
		    <option value="Christian">Christian</option>
        </select>
      </div>
    </div>
	
	
<div class="form-group">
      <label for="afford1" class="col-md-2" style="margin-top: 25px;
padding-bottom: 16px;">
        Affordance:
      </label>
      <div class="col-md-10">
        <select name="afford1" id="afford1" class="form-control" style="width:200px;">
          <option value="1000">Till 1000 INR</option>
          <option value="3000">1001-3000 INR</option>
          <option value="50000">3001-50000 INR</option>
          <option value="8000">5001-8000 INR</option>
          <option value="10000">8001+ INR</option>
        </select>
      </div>
    </div>
 
    
	
	<div class="form-group">
      <label for="state1" class="col-md-2" style="margin-top: 13px;
padding-bottom: 16px;">
        City:
      </label>
      <div class="col-md-10">
        <select name="city" id="state1" class="form-control" style="width:250px;">
          <option value="mumbai">Mumbai</option>
          <option value="pune">Pune</option>
          <option value="nashik">Nashik</option>
          <option value="jalgaon">Jalgaon</option>
          <option value="bhiwandi">Bhiwandi</option>
        </select>
      </div>
    </div>
	
	
	<div class="form-group">
      <label for="lang1" class="col-md-2" style="margin-top: 11px;
padding-bottom: 8px;">
        Preferred Language:
      </label>
      <div class="col-md-10">
        <select name="lang1" id="lang1" class="form-control" style="width:250px;">
          <option value="hindi">Hindi</option>
          <option value="english">English</option>
          <option value="gujrati">Gujarathi</option>
          <option value="tamil">Tamil</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
	

	
 
    <div class="form-group">
      <label for="uploadimage" class="col-md-2">
        Upload Profile Image:
      </label>
      <div class="col-md-10" style="margin-top:10px;">
        <input type="file" name="uploadimage" id="uploadimage">
        <p class="help-block">
          Allowed formats: jpeg, jpg, gif, png
        </p>
      </div>
 
 
    </div>
 
   
 
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <button type="submit" value = "Submit" class="btn-modal1 btn-info">
          Register
        </button>
      </div>
    </div>
	<div class="alert alert-danger" role="alert"></div>
	</div>
</form>
	</div>
	
	</div>

    
	<div id ="form2Modal" class = "modalDialog">
		
		<div>
		<a href="#close" title="Close" class="close">Close</a>
		<form role="form" class="form" name="form2" method="POST" action="roomForm2.php">
  <h2>Owner Registration</h2>
     <div class="form-group">
      <label for="firstname2" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="firstname2" name="n1" placeholder="Enter First Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="lastname2" class="col-md-2" style="margin-top: 23px;
padding-bottom: 17px;">
        Last Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="lastname2" name="n2" placeholder="Enter Last Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="birthday2" class="col-md-2" style="margin-top: 15px;
padding-bottom: 18px;">
        Date of Birth:
      </label>
      <div class="col-md-10">
        <select name="Birthday_day2" id="Birthday_Day2" class="form-control" style="width:100px; padding-right:5px; float:left;">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month2" name="Birthday_Month2" class="form-control" style="width:100px; padding-right:5px; float:left;">
<option value="-1">Month:</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
 
<select name="Birthday_Year2" id="Birthday_Year2" class="form-control" style="width:100px; padding-right:5px; float:left;">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
      </div>
 
 
    </div>
 
 
 <div class="form-group">
      <label for="mobile2" class="col-md-2" style="margin-top: 13px;
padding-bottom: 19px;">
        Mobile Number:
      </label>
      <div class="col-md-10" >
        <input type="text" class="form-control" name="mn2" id="mobile2" placeholder="Example: 8989898989" style="width:250px;">
      </div>
	  
</div>
    
 
   <div class="form-group">
      <label for="sex2" class="col-md-2" style="margin-top: 14px;
padding-bottom: 9px;">
        Gender:
      </label>
      <div class="col-md-10">
        <select name="sex2" id="sex2" class="form-control" style="width:200px;">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
	
	
	
		<div class="form-group">
      <label for="state" class="col-md-2" style="margin-top: 15px;
padding-bottom: 23px;">
        Address:
      </label>
      <div class="col-md-10" style="height">
        <textarea id="textarea2" style="width:620px; height:100px; resize:none;" name="address" placeholder="Enter address details"></textarea>
      </div>
	  
	  </div>
	  
	  <div class="form-group">
      <label for="state2" class="col-md-2" style="margin-top: 80px;
padding-bottom: 21px;">
        State:
      </label>
      <div class="col-md-10">
        <select name="city2" id="state2" class="form-control" style="width:250px;">
          <option value="mumbai">Mumbai</option>
          <option value="pune">Pune</option>
          <option value="nashik">Nashik</option>
          <option value="jalgaon">Jalgaon</option>
          <option value="bhiwandi">Bhiwandi</option>
        </select>
      </div>
    </div>
	
	 <div class="form-group">
      <label for="room2" class="col-md-2" style="margin-top: 15px;
padding-bottom: 19px;">
        Residency Type:
      </label>
      <div class="col-md-10">
        <select name="room2" id="room2" class="form-control" style="width:120px;">
          <option value="1 HK">HK</option>
          <option value="1 BHK">1BHK</option>
		  <option value="2 BHK">2BHK</option>
		  <option value="3 BHK">3BHK</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <label for="furnish2" class="col-md-2" style="margin-top: 12px;
padding-bottom: 14px;">
        Furniture:
      </label>
      <div class="col-md-10">
        <select name="furnish2" id="furnish2" class="form-control" style="width:150px;">
          <option value="Fully-furnished">Fully Furnished</option>
          <option value="Semi-furnished">Semi-Furnished</option>
          <option value="Non-furnished">Non-Furnished</option>
        </select>
      </div>
    </div>
	
	<div class="form-group">
      <label for="price2" class="col-md-2" style="margin-top: 19px;
padding-bottom: 20px;">
        Pricing Status:
      </label>
      <div class="col-md-10">
        <select name="price2" id="price2" class="form-control" style="width:120px;">
          <option>On Rent</option>
          <option>For Sale</option>
        </select>
      </div>
    </div>
	
	<div class="form-group">
      <label for="cost2" class="col-md-2" style="margin-top: 16px;
padding-bottom: 14px;">
        Cost:
      </label>
      <div class="col-md-10">
         <div class="col-md-10" >
        <input type="text" class="form-control" id="cost2" name="price" placeholder="10000 (in INR)" style="width: 200px;
margin-left: -120px;">
      </div>
      </div>
    </div>
	
	 <div class="form-group">
      <label for="agent2" class="col-md-2" style="margin-top: 22px;
padding-bottom: 4px;">
        Broker Applicable:
      </label>
      <div class="col-md-10">
        <select name="agent2" id="agent2" class="form-control" style="width:120px;">
          <option value="No Broker involved">No</option>
          <option value="Broker involved in transaction">Yes</option>
        </select>
      </div>
    </div>
	

	
 
    <div class="form-group">
      <label for="uploadimage" class="col-md-2" style="margin-top: 13px;">
        Upload Profile Image:
      </label>
      <div class="col-md-10" style="margin-top:10px;">
        <input type="file" name="uploadimage" id="uploadimage">
        <p class="help-block">
          Allowed formats: jpeg, jpg, gif, png
        </p>
      </div>
 
 
    </div>
 
   
 
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <button type="submit" class="btn-modal2 btn-info">
          Register
        </button>
      </div>
    </div>
	
	<div class="alert alert-danger" role="alert"></div>
	</div>
  </form>
		</div>
		
	</div>
	
	
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
