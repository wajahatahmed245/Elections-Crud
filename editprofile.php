<?php include 'header.php';
session_start();
include 'editprofileDB.php'
?>

<div id="page" class="container">
<hr>
    <div class="row" style="overflow:auto">
        <nav class="menu col-sm-3">

            <?php include 'nav.php';?>
        </nav>

        
        <aside class="card col-sm-9">
            <div class="card-header display-1">
                <i class="fa fa-edit" style="font-size:50px"></i>Edit Profile</div>
            <div class="card-body">

                <form class="" action="" method="POST">




                    <div class="form-group">
                        <label for="oldPaswarod">Old Password:</label>
                        <input type="password" class="form-control" name="oldPaswarod" id="oldPaswarod" required>
                    </div>



                    <div class="form-group">
                        <label for="pwd">New Password:</label>
                        <input type="password" name="pwd" class="form-control" id="pwd" required>
                      
                    </div>


                    
                    <div class="form-group">
                        <label for="Confirm New Password">Confirm New Password:</label>
                        <input type="password" name="ConfirmNewPassword" class="form-control" id="Confirm New Password" required>
                    </div>
            </div>
            <p ></p>
            <div class="card-footer">
                <button type="submit" name=changePasswordIncharge class="btn btn-success btn-md">Update</button>
            </div>
    </div>

    </aside>



</div>

</div>
</body>

</html>