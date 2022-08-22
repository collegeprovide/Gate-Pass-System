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
		width: 210px;
		    padding: 5px;
		margin-left: 2px;
		    background-color: #1f1f1f;
		    border-radius: 5px;
		    position: relative;
		    
		}
		
		
		.id-card {
			
			background-color: #fff;
			padding: 10px;
			border-radius: 10px;
			text-align: center;
			box-shadow: 0 0 1.5px 0px #b9b9b9;
			width: 190px;

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
			width: 190px;
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
			font-size: 10px;
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

<center>
<button onclick="window.print()">Print this page</button>
</center>




<?php




	
	?>



<div class="id-card-holder">
	
	
		<div class="id-card">
			<div class="header">
			<div class="photo1">
				<img src="https://iec.edu.in/erp/registrar/imgs/ic.jpg">
			</div>
        			
			</div>
			
			<?php    
               
                    
                   ?>    
			
		
      <h2>Name:  <?php echo $row['Name']; ?> </h2>
 			<h2>Fathers Name: <?php echo $row['FatherName']; ?></h2>
 			<h2>Date of Birth:  <?php echo $row['DOB']; ?></h2> 
 			
 			
 			
 			
 			<div class="photo2">
				<img src="https://iec.edu.in/erp/registrar/imgs/rs.jpg">
			</div>
			
			
			
      <h2>Mob. No.:  <?php echo $row['FatherMobile']; ?> </h2>
      			<h2>Batch:  <?php echo $row['Batch']; ?></h2>

			<h2>Course/ Branch:  <?php echo $row['Branch']; ?></h2>
			
			<Br>
			<p><strong>"Plot No. 09,Knowledge Park 03 , Greater Noida <p>
			<p>Ph: xxxxxxxxxx | E-Mail: info@iec.edu.in"</strong></p>

		</div>
</div>
 <Br>
		<?php
	
}


}?>
  
  


</body>
</html>






