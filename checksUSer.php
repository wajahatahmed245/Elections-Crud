<?php


function checkWhichUSer($x, $y) {
    include 'databaseconnection.php';
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           // echo "id: " . $row["User_ID"]. " - Name: " . . " " . $row["User_password"]. "<br>";
            if ($x==$row["User_Name"] && $y==$row["User_password"]) {
              return $row["User_designation"];
            }

            else {
                return "wrong";
            }
        }
    } 
}

?>  