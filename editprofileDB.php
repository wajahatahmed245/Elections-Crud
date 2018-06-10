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

//remove
//global variable for validiations
//$recordUpdated=null;
//$GLOBALS['recordUpdated'];

//var_dump($GLOBALS['recordUpdated']);

if (isset($_REQUEST["changePasswordIncharge"])== true) {
    
    
    $oldPaswarod=$_REQUEST["oldPaswarod"];
    $newPaswarod=$_REQUEST["pwd"];
    $ConfirmNewPassword=$_REQUEST["ConfirmNewPassword"];
    
    //using function from above
    $isNewPaswwordConfirmed=checkingNewPasword($newPaswarod, $ConfirmNewPassword);
    $isOldpasswordConfirmed=isOldPasswordCorrect($oldPaswarod);
    if ($isOldpasswordConfirmed == false) {
        $_SESSION['wrongOldPassword']="Your old password is incorrect";
    }

    if ($isOldpasswordConfirmed == true && $isNewPaswwordConfirmed == false) {     
    $_SESSION['newPasswordConfirmMatchWrong']="Rewrite your password Confirm password is written wrong";
    }
   
   $userId= $_SESSION["userPresentID"];


    if ($isNewPaswwordConfirmed == 1 && $isOldpasswordConfirmed == 1) {
        include 'databaseconnection.php';
        $sqlForUpdate="UPDATE users SET User_password='$newPaswarod' WHERE User_ID ='$userId'";
       if (mysqli_query($conn, $sqlForUpdate)) {
        $_SESSION['recordUpdate'] = "Updated successfully";
          //remove
            //  $GLOBALS['recordUpdated']=$GLOBALS['$recordUpdated'];
            
            
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        
    }



    echo '<br>';
    echo '  $isNewPaswwordConfirmed=checkingNewPasword($newPaswarod, $ConfirmNewPassword) '.$isNewPaswwordConfirmed;
    echo '<br>';
    echo ' $isOldpasswordConfirmed=isOldPasswordCorrect($oldPaswarod) = '.$isOldpasswordConfirmed;
    echo '<br>';
}
     
      
?>