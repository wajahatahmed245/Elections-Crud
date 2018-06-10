<?php

session_start();
$_SESSION['recordUpdate']=null;
$_SESSION["userPresent"]=null;
$_SESSION['wrongOldPassword']=null;
$_SESSION['newPasswordConfirmMatchWrong']=null;
$_SESSION['wrongUsername'] = null;

header("location:index.php");
//remove
//include "index.php";

?>