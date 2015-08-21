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
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="aboutus.php">About</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQs</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact</a>
                    </li>
					
                </ul>
				<div class="log">
                <?php if(!isset($_SESSION['uid'])){ ?>
            <ul>
					<li>
                        <a  href="#modal" id="modal_trigger"  class="login-window">Sign Up</a>
                        <!--<a id="modal_trigger" href="#modal" >Click here to Login or register</a>-->
                    </li>
					
             </ul>   
	</div>			 
				<?php } 
				else{
				?>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                	<ul class="nav navbar-nav navbar-right">
					 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['uname'];?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <?php if($_SESSION['rid']!=0) {?>
                            <li>
                                <a href="indProedit.php">Use As Roommate</a>
                            </li><?php } if($_SESSION['oid']!=0) {?>
                            <li>
                                <a href="indRoomEdit.php">Use As Buyer</a>
                            </li><?php } if($_SESSION['bid']!=0) {?>
                            <li>
                                <a href="indRoomEdit1.php">Use As Owner</a>
                            </li><?php } ?>
							<li>
                                <a href="signout.php"><b>Logout</b></a>
                            </li>
                        </ul>
                    </li>
             </ul>   
		</div>			 
			 <?php } ?>
			
            </div>
            <!-- /.navbar-collapse -->