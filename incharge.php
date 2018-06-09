<?php 


include 'header.php';
?>

<?php

session_start();
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
    </div>
    </div>
    
    hello incharge 
    
    <?php echo " ". $_SESSION["userPresent"]?>
</body>
</html>