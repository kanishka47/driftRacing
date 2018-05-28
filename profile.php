<?php

$id=$_GET['id'];


$con=mysqli_connect("localhost","root","","drift") or die(mysqli_error($con));
$sql = "SELECT * FROM team Where id='$id'";
$result = $con->query($sql);

print_r($result);
    
   $user = $result->fetch_assoc();

   
   echo $id;

    echo $user['name'];
	echo $user['position'];
        echo $user['branch'];
        echo $user['about'];
	
		
?>




<html>
<head>

         <?php
        include 'head.php';
        ?>
<link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Megrim|Open+Sans|Quattrocento" rel="stylesheet">
<title>Profile Page</title>
</head>


  <body class="blue-grey darken-3">
     
        
         <?php
        include 'navbar.php';
        ?>
		
		
	<!--	<div class="propic">
		<img src="<?php echo $user['image'] ?>" class="rounded img-fluid z-depth-1-half size ">
		
		
		
                      
    
                    <h1 class="pronname"><?php echo $user['name']?></h1>
					<div class="col-md-6">
					<div class=" card">
                    <h3 class="pro" ><?php echo $user['position']?> / <?php echo $user['branch']?></h3>
                       <i class="fa fa-quote-left"></i> <?php echo $user['about']?>
					   </div>
					  </div>
		</div>-->
		
		<div class="container">
		<div class="row">
		<div class="proname"><?php echo $user['name']?></div>
		</div>
		
		<div class="row">
		<div class="col-md-6">
		
		<div class=" blue-grey darken-2 card">
                    <h3 class="pro" ><?php echo $user['position']?> </h3> <h2 class="pro"><?php echo $user['branch']?></h2>
		
		</div>
		<br /><br />
		                    
		               		<div class=" blue-grey darken-2 card">
                       <i class="fa fa-quote-left"></i> <?php echo $user['about']?>
					   </div>
					   
		
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-4">
		<img src="<?php echo $user['image'] ?>" class="rounded img-fluid z-depth-1-half size ">
		</div>
		  
		</div>
		</div>
		
		
		

		</body>
		
		
		</html>
		
		
		
		