<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['submit'])) { 
    
    
    //to check if the form was submitted
    $bname = $_POST['bname'];
    $baddress =$_POST["baddress"];
    $bphoone =$_POST["bphoone"];
    $lat =$_POST["lat"];
    $lng =$_POST["lng"];
 
    
       
    




$sql = "INSERT INTO  branches(bname,baddress,bphone,lat,lng) VALUES('$bname','$baddress','$bphoone','$lat','$lng')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
 
    header("Location:maplocations.php");
                
                





        
    }

       else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}






$conn->close();








   


  
}



?>