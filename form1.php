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
    <link href="css/form.css" rel="stylesheet">
	<script src="js/form.js" type="text/javascript"></script>
    <!-- Custom CSS -->
	<link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/form1.css" rel="stylesheet">
	<style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
    <script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script> $(function() { $( "#content_panel" ).tabs(); }); </script>
    <link rel="stylesheet" href="css/slider.css">
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    
    
     <script>
	 	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
	});
	 </script>
	

<script>
	$(function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 10000,
			values: [ 75, 8000 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				getEvent1(ui.values[0],ui.values[1]);
				//getEvent2("search".value,ui.values[0],ui.values[1]);
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
			getEvent1($( "#slider-range" ).slider( "values", 0 ),$( "#slider-range" ).slider( "values", 1 ));
			//getEvent1(ui.values[0],ui.values[1]);
			//getEvent1();		
	});
	</script>
    <!--<script>
	function getEvent2(value,value1,value2)
	{
		$.get("getRoom1.php",{partial:value,a:value1,b:value2},function(data){
        $("#results").html(data);
		});
	}
	</script>-->
    
    <script>
	function getEvent1(value1,value2)
	{
		$.post("getRoom1.php",{a:value1,b:value2},function(data){
        $("#results").html(data);
		});
	}
	
	</script>
    
   <!-- <script>
	
	 $(function() {
      $('check').value('hi')
     
	 });
	
	</script>-->
    <script>
	function getEvent()
	{
		$.post("getRoom1.php",{partial:$('#search1').val()},function(data){
        $("#results").html(data);
		});
	}
	</script>
   
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
            <img src="http://placehold.it/150x50&text=Logo" alt=""></a></div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					
            </ul>
				<div class="log">
            <ul>
					<li>
                        <a href="#">Sign Up</a>
                    </li>
					<li>
                        <a>|	</a>
                    </li>
					<li>
                        <a href="#">Log in</a>
                    </li>
             </ul>       
			</div>
          </div>
            <!-- /.navbar-collapse -->
            
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">
    	<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Refine Search<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a>Cost</a>
          		<ul class="sidebar-nav" id="sidebar">
                	<form action="" method="post" id="products">
						<div style="margin-left:20px">
							<label for="amount">Price range:</label>
							<input type="text" id="amount" name="amount" style="border:0; color:#f6931f; font-weight:bold;" readonly>
							<br><br>
							<div id="slider-range" style="width:200px;"></div>
								<br><br>
								<input type="submit" value=" Show products " />
								<br><br>
							</div>
							
						</div>
					</form>

                </ul>
          </li>
          <li><a>Location</a></li>
          
          
          
          
          <ul>
                            <li><a href="#subtractOn">Ajax</a></li>
                            <li><a href="#addOn">Add ons</a></li>
                            
          </ul>
                        
                        
                        
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              
					
                    <form method="get" name="form1">
                    	<input type="text" id="search1" name="search" onkeyup="getEvent()"></br></br>
                        <div id="addOn">
                        <span>GENDER</span>
                        <input type="checkbox" name="male" value="male">Male&nbsp;&nbsp;&nbsp;
						<input type="checkbox" name="female" value="female">Female&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="coed" value="coed">Co-ed
                        <span>furniture</span>
                        <input type="checkbox" name="F" value="Furnished">Furnished&nbsp;&nbsp;&nbsp;
						<input type="checkbox" name="SF" value="SemiFurnished">Semi-Furnished&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="NF" value="NFurnished">Without Furniture
                        </div>
                    </form>
                    <div id="subtractOn">
                    <p>
	<label for="amount">Price range:</label>
	<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
    
<div id="slider-range"></div>
                    
</br>
</div>
</br>
<div id="results" style="float:left">

</div>
           	  
          </div>
        </div>
      </div>
      
    </div>
    </div>
    
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	

	


</body>
<script src="js/slider1.js"></script>
<script src="js/slider2.js"></script>
</html>
