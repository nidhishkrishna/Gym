
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gym";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("CONNECTION FAILED:".$conn->connect_error);
}
else{
    
    // echo "<div><center><h1 style='color:green;'>✓</h1></center>
    // <center><h1 style='color:green; font-size:40px; '>successfully</h1></center></div>";
    // echo "Connected";
}
?> 