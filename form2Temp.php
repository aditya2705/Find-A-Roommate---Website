<!DOCTYPE html>
<html>
  <head>
    <title>
      New Registration
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/formNext.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 
    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
 
  </head>
  <body>
    <div class="container" style="margin: 10px;">
<form role="form" class="form">
  <h2>New Registration</h2>
    <div class="form-group">
      <label for="firstname" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="lastname" class="col-md-2">
        Last Name:
      </label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="birthday" class="col-md-2" style="margin-top:15px">
        Date of Birth:
      </label>
      <div class="col-md-10">
        <select name="Birthday_day" id="Birthday_Day" class="form-control" style="width:100px; padding-right:5px; float:left;">
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
 
<select id="Birthday_Month" name="Birthday_Month" class="form-control" style="width:100px; padding-right:5px; float:left;">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year" class="form-control" style="width:100px; padding-right:5px; float:left;">
 
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
      <label for="mobile" class="col-md-2" style="margin-top:15px;">
        Mobile Number:
      </label>
      <div class="col-md-10" style="">
        <input type="text" class="form-control" id="mobile" placeholder="Example: 999999999">
      </div>
	  
</div>
    
 
    <div class="form-group">
      <label for="sex" class="col-md-2" style="margin-top: 20px; padding-bottom:25px;">
        Gender:
      </label>
      <div class="col-md-10" style="">
        <label class="radio">
          <input type="radio" name="sex" id="sex" value="male" checked>
          Male
        </label>
        <label class="radio">
          <input type="radio" name="sex" id="sex" value="female">
          Female
        </label>
      </div>
 
 
    </div>
	
	<div class="form-group">
      <label for="state" class="col-md-2" style="margin-top:15px;">
        State:
      </label>
      <div class="col-md-10" style="">
        <input type="text" class="form-control" id="state" placeholder="Example: Maharashtra">
      </div>
	  
	  </div>

 
    <div class="form-group">
      <label for="country" class="col-md-2">
        Country:
      </label>
      <div class="col-md-10">
        <select name="country" id="country" class="form-control">
          <option>--Please Select--</option>
          <option>India</option>
          <option>United States</option>
          <option>Canada</option>
          <option>United Kingdom</option>
          <option>Others</option>
        </select>
      </div>
    </div>
	
	
		<div class="form-group">
      <label for="state" class="col-md-2" style="margin-top:15px;">
        Address:
      </label>
      <div class="col-md-10" style="height">
        <textarea style="width:620px; height:100px; resize:none;"></textarea>
      </div>
	  
	  </div>
	

	
 
    <div class="form-group">
      <label for="uploadimage" class="col-md-2" style="margin-top:85px;">
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
        <button type="submit" class="btn btn-info">
          Register
        </button>
      </div>
    </div>
  </form>
  </div>
 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>