<?php
	$page='roomamte';
	error_reporting(E_ALL^E_NOTICE);
    require('include/connect.php');
	session_start();
        
        /*$a = $_POST['a'];
		$b= $_POST['b'];
		$c=$_POST['partial'];*/
		/*$p1=$_REQUEST['p1'];
		$p2=$_REQUEST['p2'];
		$p3=$_REQUEST['p3'];
		$p4=$_REQUEST['p4'];
		$p5=$_REQUEST['p5'];*/
		/*$i;
		$g1='male';
		echo "g1=".$g1;
		$g2='female';
		$p1='student';
		$p2='teacher';
		$p3='engineer';
		$p4='doctor';
		$p5='other';*/

		
		
		if(!empty($_POST['a']) && !empty($_POST['b']))
		{
			$a = $_POST['a'];
			$_SESSION['a']=$a;
			$b= $_POST['b'];
			$_SESSION['b']=$b;
		}
		else{
			$a=$_SESSION['a'];
			$b=$_SESSION['b'];
		}
		
		 if($_POST['partial']!=$_SESSION['partial'] && (!empty($_POST['partial'])) )
		{
			$c=$_POST['partial'];
			$_SESSION['partial']=$c;
			//echo "1session[c]=".$c;
		}
		else
		{
			$c=$_SESSION['partial'];
			//echo "2session[c]=".$c;
		}
		
		
		if(isset($_REQUEST['p1']) || isset($_REQUEST['p2']) || isset($_REQUEST['p3']) || isset($_REQUEST['p4'])  ){
			//echo "</br>session set</br>";
			$p1=$_REQUEST['p1'];
			$_SESSION['p1']=$p1;
			$p2=$_REQUEST['p2'];
			$_SESSION['p2']=$p2;
			$p3=$_REQUEST['p3'];
			$_SESSION['p3']=$p3;
			$p4=$_REQUEST['p4'];
			$_SESSION['p4']=$p4;

			//$i=1;
		}
		
		if(isset($_REQUEST['g1']) || isset($_REQUEST['g2']) || isset($_REQUEST['g3'])){
			$g1=$_REQUEST['g1'];
			$_SESSION['g1']=$g1;
			$g2=$_REQUEST['g2'];
			$_SESSION['g2']=$g2;
			$g3=$_REQUEST['g3'];
			$_SESSION['g3']=$g3;
		}
		
		if(!isset($_REQUEST['p1']) && !isset($_REQUEST['p2']) && !isset($_REQUEST['p3']) && !isset($_REQUEST['p4'])  && !isset($_REQUEST['g1']) && !isset($_REQUEST['g2']) && !isset($_REQUEST['g3']) && (isset($_POST['partial']) || isset($_POST['a']) || isset($_POST['b']))){
			$p1=$_SESSION['p1'];
			$p2=$_SESSION['p2'];
			$p3=$_SESSION['p3'];
			$p4=$_SESSION['p4'];
			$g3=$_SESSION['g3'];
			$g1=$_SESSION['g1'];
			$g2=$_SESSION['g2'];
			}
			
			if($g1==$g2){
				$g1="Fully-furnished";
				$g2="Semi-furnished";
				$g3="Non-furnished";
			}
			
			if($p1==$p2 && $p2==$p3 && $p3==$p4 && $p4==$p5){
				$p1='1 RK';
				$p2='1 BHK';
				$p3='2 BHK';
				$p4='3 BHK';
			}
		
		if(!isset($_REQUEST['p1']) && !isset($_REQUEST['p2']) && !isset($_REQUEST['p3']) && !isset($_REQUEST['p4'])  && !isset($_REQUEST['g1']) && !isset($_REQUEST['g2']) /*&& !isset($_SESSION['p1']) && !isset($_SESSION['p2']) && !isset($_SESSION['p3']) && !isset($_SESSION['p4']) && !isset($_SESSION['g3']) && !isset($_SESSION['g1']) && !isset($_SESSION['g2'])*/){
		//if($p1==$p2 && $p2==$p3 && $p3==$p4 && $p4==$p5 && $p5==$g1 && $g1==$g2){
			//echo "panju";
			$query = "SELECT * FROM bs WHERE city LIKE '%$c%' AND (price>='{$a}' AND price<='{$b}');";
		}
		else{
			//echo "bhaiya";
			$query = "(SELECT * FROM bs WHERE (city LIKE '%$c%') AND (price>='{$a}' AND price<='{$b}') AND (type='{$p1}' OR type='{$p2}' OR type='{$p3}' OR type='{$p4}') AND (furniture='{$g1}' OR furniture='{$g2}' OR furniture='{$g3}')) ;";
		}
		
		//echo "a=".$a."   b=".$b."    c=".$c."    p1=".$p1."    p2=".$p2."    p3=".$p3."    p4=".$p4."   </br>g1=".$g1."    g2=".$g2."     g3=".$g3;
       
			 
			$r=$query= mysql_query($query);
			//$n= mysql_num_rows($r);
			//echo "</br>".$n."</br>";
			//echo var_export($_POST);
       
        
        /*while($row = mysql_fetch_assoc($r))
        {
            $info = 'id:' .$row['id']. 
			'location:' .$row['location']. 
			'owner:' .$row['owner']. 
			'price:'. $row['price'].
			'description:' .$row['description'];
			echo $info;
        }*/
		
		while($row = mysql_fetch_assoc($r)){ ?>
			<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="indRoom1.php?bid=<?php echo $row['bid']; ?>"><img src="http://placehold.it/320x150" alt="<?php echo $row['name']; ?>"></a>
                            <a href="indRoom1.php?bid=<?php echo $row['bid']; ?>"></a>
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $row['price']; ?>
</h4>
                                <h4><a href="indRoom1.php?bid=<?php echo $row['bid']; ?>"><?php echo $row['name']; ?></a>
                                </h4>
                                <p>
                                Type:<?php echo $row['type']; ?><br/>
                                Furniture:<?php echo $row['furniture']; ?><br/>
                                Address<?php echo $row['roomAddress']; ?><br />
                                City:<?php echo $row['city']; ?><br/></p>
                            </div>
                           
                        </div>
                    </div>
		<?php }
		
        
        /* if($info == '')
		{
            echo 'pratik';
		}
        else {
            echo "panjwani" ;
			echo $info;
		}*/
    

?>