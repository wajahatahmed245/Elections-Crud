<?php include 'header.php';?>
<?php include 'checksUSer.php';?>

<?php 
session_start();
if (isset($_REQUEST["logIn"])== true) {
$userName=$_REQUEST["Username"];
$passWord=$_REQUEST["pwd"];

//using function from checksUSer.php
  $User=checkWhichUSer($userName, $passWord);
  $_SESSION["userPresent"]=$User[0];
  $_SESSION["userPresentID"]=$User[1];
 //remove it after all done
  //var_dump($_SESSION["userPresent"]);
  if ($User[0]=="incharge") {  
   header("location:incharge.php");
   $_SESSION['wrongOldPassword']=null;
  }
  else{
    $_SESSION['wrongOldPassword']="Incorrect password fill it again";
   
  }
 
}


?>

<div id="page" class="container">
<hr>
    <div class="row" style="overflow:auto height:130px">
 

    <div class="card col-sm-12" >
      <div class="card-header display-3"><i class="fa fa-sign-in" style="font-size:50px"></i>Sign In</div>
      <div class="card-body">

      <form class="" action="" method="POST">

    


    <div class="form-group">
        <label for="Username">Username:</label>
        <input type="text" class="form-control" name="Username" id="Username" required>
    </div>

    

    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" class="form-control" id="pwd" required>
    </div>
    <p class="text-danger"><?= $_SESSION['wrongOldPassword'] ?></p>
      </div> 
      <div class="card-footer">  <button type="submit" name=logIn class="btn btn-success btn-md">Log in</button> 
      <a href="index.php"> <button type="button"  name=Back class="btn btn-success btn-md">  Back</button></a>
    </div>
      
    </div>
  </div>
  
      
        
   

    </div>

</div>
</body>

</html>