<html>
<head>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #fff;
            font-size: 16px;
            text-align: left;
        }
        
        tr:nth-child(odd) {background-color:588c7e;}
        tr:nth-child(even) {background-color:#19e366;}
        
        
      
            
          
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
<body style="background-color:588c7e;">
<!-- nav bar stat -->
<nav class="navbar navbar-light" style="background-color: #000; color:#fff;">
  <div class="container-fluid">
   
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
    </div>
  </div>
</nav>
  <!-- Nav bar end-->
    <table>
         <tr>
             <td>S.No.</td>
             <td>NAME.</td>
             <td>MOBILE NO.</td>
             <td>DATE</td>
             <td> TIME </td>
             <td>WHOM TO MEET</td>
             <td> PURPOSE</td>
             
         </tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gatepasssystem";
   
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM `visitorinfo` ORDER BY `Sr_No` DESC";
  $result = $conn->query($sql);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   
   
  
    // output data of each row
   
    
   
     while($row = $result->fetch_assoc()) {
         echo "";
        
        echo "<tr><td>".$row["Sr_No"] ."</td><td>".$row["name"] ."</td><td>". $row["mobile"] ."</td><td>".$row["date"] ."</td><td>".$row["time"] ."</td><td>" .$row["meet"] ."</td><td>".$row["purpose"] ."</td></tr>";
    }
echo "</table>";
$conn->close();
?>
<br>
<center>
<button onclick="window.print()">Print this page</button>
</center>
</body>
</html>



