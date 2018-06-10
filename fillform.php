<?php include 'header.php';
session_start();
$userFormFill=null;
$uriOfPage=$_SERVER['REQUEST_URI'];
if (strrpos( $uriOfPage,"fillform.php") != false  ) {
    $_SESSION["userPresent"]=null;
    $_SESSION["user"]="voter";
    $userFormFill= $_SESSION["user"];
}

if (isset($_REQUEST["submitFillForm"])== true) {
    $name=$_REQUEST["name"];
    $fName=$_REQUEST["fName"];
    $cnic=$_REQUEST["cnic"];
    $Address=$_REQUEST["Address"];
    
    include 'insertintodatabase.php';
    insertingIntoDatabases($name, $fName,$cnic,$Address,$userFormFill);
    


    }

?>
<div id="page" class="container">
<hr>
    <div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">
            <?php include 'nav.php';?>
        </nav>
        
        
        <aside class="card col-sm-9">
            <div class="card-header display-1">
                <i class="fa fa-drivers-license-o" style="font-size:50px"></i>Form</div>
            <div class="card-body">

                <form class="" action="" method="POST">




                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    


                    <div class="form-group">
                        <label for="fName">Father Name:</label>
                        <input type="text" name="fName" class="form-control" id="fName" required>
                      
                    </div>


                    
                    <div class="form-group">
                        <label for="cnic">CNIC:</label>
                        <input type="text" name="cnic" class="form-control" id="cnic" required>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address:</label>
                        <input type="text" name="Address" class="form-control" id="Address" required>
                    </div>

                    
                    </div>
            <p class="text-success"><?php 
            if ($_SESSION["user"] != 'voter') {
              echo $_SESSION["user"];
            }
            ?></p>
            <div class="card-footer">
                <button type="submit" name=submitFillForm class="btn btn-success btn-md">Submit</button>
            </div>
    </div>

    </aside>

   

    </div>

</div>
</body>

</html>