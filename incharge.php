<?php 


include 'header.php';
?>

<?php

session_start();

if ($_SESSION["userPresent"] != "incharge") {
    $_SESSION["userPresent"]=null;
    header("location:index.php");
}

?>

<?php
//remove
//$_SESSION["userPresent"]

?>
<div id="page" class="container">

<div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">
            <?php include 'nav.php';?>
        </nav>
        <?php include 'welcome.php';?> 
    </div>
    </div>  
    
    
    
</body>
</html>