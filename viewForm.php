<?php include 'header.php';
session_start();    
//remove var_dump
var_dump($_SESSION["userPresent"]) ;
echo 'var_dump($_SESSION["userPresent"]) = ';   
?>
<div id="page" class="container">

    <div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">
            <?php include 'nav.php';?>
        </nav>
      
        
   

    </div>

</div>
</body>

</html>