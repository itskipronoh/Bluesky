  <?php


$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "house_bidding"; 


$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 