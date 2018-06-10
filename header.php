<!DOCTYPE html>
<html lang="en">
<?php
$uriOfPageGlobal=$_SERVER['REQUEST_URI'];
if (strrpos( $uriOfPageGlobal,"fillform.php") == false  ) {
   
    $_SESSION["user"]=null;
   }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title> </title>
</head>

<body>
    <header id="vue_det">
        <script src="vue_instance.js" type="text/javascript"></script>
        <div class= "bg-success" style="padding:15px;text-align:center;">
            <h1 class="display-4"><span><img src="images/plmn2.png" alt="Nature" class="responsive"></span></h1>
        </div>
        
    </header>