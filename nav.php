
<?php include 'navControl.php'; ?>
<?php 
//caliing function from navcontrol.php
$arrayOfNavList=naveSetting($_SESSION["userPresent"]);

?>
                    <ul>
                        <li>
                            <a class="active" href="#home"><?=  $arrayOfNavList[0] ?></a>
                        </li>
                        <li>
                            <a href="Signin.php"><?=  $arrayOfNavList[1] ?></a>
                        </li>
                        <li>
                            <a href="#contact"><?=  $arrayOfNavList[2] ?></a>
                        </li>
                        <li>
                            <a href=""><?=  $arrayOfNavList[3] ?></a>
                        </li>
                    </ul>
                    