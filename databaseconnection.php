<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "elections";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo "<br>";
echo mysqli_num_rows($result);  
echo "<br>";


//remove
/*
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["User_ID"]. " - Name: " . $row["User_Name"]. " " . $row["User_password"]. "<br>";
    }
} else {
    echo "0 results";
}*/
?>