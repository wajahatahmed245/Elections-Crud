<?php 
function insertingIntoDatabases($NAME,$FATHERNAME,$CNIC,$ADDRESS,$USER){
    include 'databaseconnection.php'; 
    $sqlForInsert = "INSERT INTO voters_info (names,fathername,cnic,address,Createdby)
    VALUES ('$NAME', '$FATHERNAME','$CNIC', '$ADDRESS','$USER')";
if (mysqli_query($conn, $sqlForInsert)) {
    $_SESSION["user"]="Processed";
    $_SESSION["Processed"]="Processed";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
