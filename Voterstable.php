<?php include 'header.php';
session_start();  
//remove var dump  
var_dump($_SESSION["userPresent"]);
?>
<div id="page" class="container">
<hr>
    <div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">
            <?php include 'nav.php';?>
        </nav>
    
   
<aside class="col-sm-9">

<a href="viewForm.php"><button type="button" class="btn btn-success btn-block">Veiw Form</button></a>
<br>
<a href="createform.php"><button type="button"  class="btn btn-success btn-block text-capitalize">Create form</button></a>

</aside>

    </div>

</div>
</body>

</html>