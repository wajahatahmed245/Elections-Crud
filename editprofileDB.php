<?php

function checkingNewPasword($new, $confirm){

    
    if($new == $confirm){
        return true;
    }
    else{
        return false;
    }
}



function isOldPasswordCorrect($old){

    include 'databaseconnection.php';
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //remove
            echo "id: " . $row["User_ID"]. " - Name: " . " " . $row["User_password"]. "<br>";
            if ($old==$row["User_password"] && $_SESSION["userPresent"]=="incharge") {
              return true;
            }

            else {
                return false;
            }
        }
    } 
}




if (isset($_REQUEST["changePasswordIncharge"])== true) {


    $oldPaswarod=$_REQUEST["oldPaswarod"];
    $newPaswarod=$_REQUEST["pwd"];
    $ConfirmNewPassword=$_REQUEST["ConfirmNewPassword"];
    
    //using function from above
    $isNewPaswwordConfirmed=checkingNewPasword($newPaswarod, $ConfirmNewPassword);
    $isOldpasswordConfirmed=isOldPasswordCorrect($oldPaswarod);

    if ($isNewPaswwordConfirmed == true && $isOldpasswordConfirmed == true) {

        
    }





    echo '<br>';
    echo '  $isNewPaswwordConfirmed=checkingNewPasword($newPaswarod, $ConfirmNewPassword) '.$isNewPaswwordConfirmed;
    echo '<br>';
    echo ' $isOldpasswordConfirmed=isOldPasswordCorrect($oldPaswarod) = '.$isOldpasswordConfirmed;
    echo '<br>';
}
     
      
?>