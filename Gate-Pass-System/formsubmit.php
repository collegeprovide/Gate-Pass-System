<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gatepasssystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name= $_POST['name'];
$mobile= $_POST['mobile'];

$purpose= $_POST['purpose'];
$meet= $_POST['meet'];



$sql="INSERT INTO `visitorinfo` (`name`, `mobile`,  `purpose`, `meet`, `time`) VALUES ('$name', '$mobile', '$purpose', '$meet', current_timestamp())";

if ($conn->query($sql) === TRUE)
{

}

else
{
  echo "Ok " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>

<html>
<head>

<style type="text/css">

body 

		{
			background-color: #d7d6d3;
			font-family:'Times New Roman';
			
		}
		
		.id-card-holder 
		{
		width: 500px;
		    padding: 5px;
		margin-left: 2px;
		    background-color: #1f1f1f;
		    border-radius: 5px;
		    position: relative;
		    
        
		}
		
		
		.id-card {
			
			background-color: #fff;
			padding: 10px;
			border-radius: 20px;
			text-align: center;
			box-shadow: 0 0 1.5px 0px #b9b9b9;
			width: 500px;

		}
		
		.id-card img {
			margin: 0 auto;
		}
		.header img {
			width: 100px;
    		margin-top: 15px;
		}
		
		.photo img {
			width: 80px;
    		margin-top: 15px;
		}
		
		.photo1 img {
			width: 250px;
			height: 70px;
    		margin-top: 0px;
		}
		.photo2 img {
			width: 80px;
			height: 45px;
    		margin-top: 2px;
    		float: right;
		}
		
		h2 {
			font-size: 14px;
			margin: 2px 0;
			margin-right: %;

		    text-align: left;
      
		}

		h1 {
			font-size: 18px;
			margin: 5px 0;
      			text-align: center;
      
		}

		
		
		

		
		p {
 			font-size: 9px;
			margin: 2.5px 0;
			font-weight: 300;
		}
		
		

</style>
<style type="text/css" media="screen"></style>

<style type="text/css" media="print">
 


</style>

</head>

<body>






<?php




	
	?>




<div class="id-card-holder" style="margin-left: 60%; width : 30%; height: 46%; border-style: solid; border: width 3px;">
	
	
		<div class="id-card" style="height: 93%; width:95%">
			<div class="header">
			<div class="photo1">
			<img src="./logo2.jpg" >
			<center><h1>Gate Pass </h1></center>
			<center> <h1 >Guard Copy</h1></center>

				
			</div>
        			
			</div>
			
			<?php    
               
                    
                   ?>    
			
		
      <h2>Name:  <?php echo $name; ?> </h2>
 			
 			<h2>Date:  <?php echo  date('m/d/Y') ;?></h2> 
       <h2>Time:	<?php date_default_timezone_set('Asia/Kolkata');
                     echo date(' h:i:s A'); 
              ?></h2>
 			
 			
 			
 			
 			
			
			
			
            <h2>Purpose:  <?php echo $purpose ?> </h2>
      			<h2>Meet To :  <?php echo $meet; ?></h2>

			
			<h2 style=" text-align: right;"> Signature</h2>
			<br>
						<p><strong>"Plot No. 04,Knowledge Park 01 , Greater Noida <p>
			<p>Ph: 8527648757 | website: collegeprovide.com"</strong></p>

		</div>
</div>

<br>
<div class="id-card-holder" style="margin-left: 60%; width : 30%; height: 46%; border-style: solid; border: width 3px;">
	
	
		<div class="id-card" style="height: 93%; width: 95%"><div class="header" >
<div class="photo1">
<img src="./logo2.jpg">
        <center><h1>Gate Pass </h1></center>
		<center>  <h1 >Visitor Copy</h1></center>
				
			</div>
        			
			</div>
			
			<?php    
               
                    
                   ?>    
			
		
      <h2>Name:  <?php echo $name; ?> </h2>
 			
 			<h2>Date:  <?php echo date('m/d/Y'); ?></h2> 
 			
 		<h2>Time:	<?php date_default_timezone_set('Asia/Kolkata');
                     echo date(' h:i:s A'); 
              ?>
     </h2>
 			
 			
			
			
            <h2>Purpose:  <?php echo $purpose ?> </h2>
      			<h2>Meet To :  <?php echo $meet; ?></h2>

			
			<h2 style=" text-align: right;"> Signature</h2>
			
			<br>
			<p><strong>"Plot No. 04,Knowledge Park 01 , Greater Noida <p>
			<p>Ph: 8527648757 | website:: collegeprovide.com"</strong></p>

		</div>
    
</div>


</body>
</html>






