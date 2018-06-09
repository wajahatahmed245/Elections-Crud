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
else
{
    $li1="Home";
    $li2="Sign in";
    $li3="Fill form";
    $li4="About";
    return array($li1,$li2,$li3,$li4);
}    
}

$href1='';
$href2='';
$href3='';
$href4='';

function hrefSetting($sessionVariableForHrief) {
    if ($sessionVariableForHrief=="incharge") {
        $href1="editprofile.php";
        $href2="uniounCouncil.php";
        $href3="WardInCharge.php";
        $href4="BlockCodeInCharge.php ";
        return array($href1,$href2,$href3,$href4); 
    }
    else
    {
        $href1="#Home";
        $href2="Signin.php";
        $href3="#contact";
        $href4="#About";
        return array($href1,$href2,$href3,$href4);
    }    



}



?>