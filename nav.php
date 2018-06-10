
<?php include 'navControl.php'; ?>
<?php 

//caliing function from navcontrol.php
$arrayOfNavList=naveSetting($_SESSION["userPresent"]);
$arrayOfHrefList=hrefSetting($_SESSION["userPresent"]);

$list1Activation='';
$list2Activation='';
$list3Activation='';
$list4Activation='';
$list5Activation='';



    $uriOfPage=$_SERVER['REQUEST_URI'];
if (strrpos( $uriOfPage,"editprofile.php") != false  ) {
    $list1Activation = "active";
}

elseif(strrpos( $uriOfPage,"uniounCouncil.php") != false  ){
    $list2Activation="active";
}
   


elseif(strrpos( $uriOfPage,"incharge") != false  ){
    $list3Activation=null;
}


elseif(strrpos( $uriOfPage,"Voterstable.php") != false  ){
    $list5Activation="active";
}


elseif(strrpos( $uriOfPage,"index.php") != false && $_SESSION["userPresent"] == null ){
    $list1Activation="active";
}

elseif(strrpos( $uriOfPage,"fillform.php") != false  ){
    $list3Activation="active";
}


/*
remove

echo $_SERVER['REQUEST_URI'];
var_dump($_SERVER['REQUEST_URI']);
echo '<br>';
if (strrpos( $_SERVER['REQUEST_URI'],"incharge") != false  ) {
    echo 'this is '. $_SERVER['REQUEST_URI'];
}
echo '<br>';
*/
?>
                    <ul>
                        <li>
                            <a class="<?=  $list1Activation ?>" href="<?=  $arrayOfHrefList[0] ?>"><?=  $arrayOfNavList[0] ?></a>
                        </li>
                        <li>
                            <a class="<?=   $list2Activation ?>" href="<?=  $arrayOfHrefList[1] ?>"><?=  $arrayOfNavList[1] ?></a>
                        </li>
                        <li>
                            <a class="<?=  $list3Activation ?>" href="<?=  $arrayOfHrefList[2] ?>"><?=  $arrayOfNavList[2] ?></a>
                        </li>
                        <li>
                            <a class=" " href="<?=  $arrayOfHrefList[3] ?>"><?=  $arrayOfNavList[3] ?></a>
                        </li>
                    <?php


if ($_SESSION["userPresent"] == "incharge") {
    echo "<li>";
    echo "<a class='. $list5Activation .' href='Voterstable.php'>Voter Form</a>";
 echo '</li>';
 }


                    if ($_SESSION["userPresent"] != null) {
                       echo "<li>";
                       echo "<a href='logout.php'>Logout</a>";
                    echo '</li>';
                    }
                    ?>


                    </ul>
                    