<?php 
session_start();

include 'header.php';
?>

<?php


?>

<?php
//remove
//$_SESSION["userPresent"]

?>

<div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">
            <?php include 'nav.php';?>
        </nav>
         
        
   

    </div>
    hello incharge 
    
    <?php echo " ". $_SESSION["userPresent"]?>
</body>
</html>