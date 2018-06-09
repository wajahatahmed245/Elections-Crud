<?php

$li1="";
$li2="";
$li3="";
$li4="";

function naveSetting($sessionVariable) {
   
if ($sessionVariable=="incharge") {
    $li1="Edit Profile";
    $li2="Union Council";
    $li3="Ward In Charge";
    $li4="Block Code In Charge ";
    return array($li1,$li2,$li3,$li4); 
}


}
?>