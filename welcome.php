<div align="center" class"welcome col-sm-9 display-3">

<?php
$modalBody=null;
$headingOfIndex=null;
if ($_SESSION["userPresent"] != null) {
    
    $headingOfIndex=strtoupper($_SESSION["userPresent"]);
    
    $bagde='<h1> <span class="badge badge-success">'.$headingOfIndex.' INTERFACE</span></h1>';
}

else{
    $modalBody='Please Sign In  ..Or for your Vote click on Fill Form ';
    $bagde="Management System";
}

?>
<?php
if ($_SESSION["userPresent"] == null){
echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">';
echo   ' Since October 6, 1993';
 echo '</button>';
}
?>
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Vote Mangement System</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <?= $modalBody  ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    </div>
<h1 class="text-xs-center"  ><?=  $bagde  ?> </h1>

</div>