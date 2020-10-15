<?php

require_once('pclass.php');


 $Mango->set_name('Amrupali');
 $Mango->set_color('Green');
 $Mango->set_weight('2.5 Kg');
 echo $Mango->fruit_full_des()." <br>";
echo $Mango->message()." <br>";
 //=======================================//


$path = "/files/home.php";
echo basename($path) ."<br/>";
echo basename($path,".php");
chgrp("/files/home.php","admin");

//=========================================//
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!")." <br>";
fclose($file);
//unlink("test.txt");

//=====================================//
echo disk_free_space("C:")." <br>";
echo disk_total_space("C:")." <br>";

echo filectime("test.txt");
echo "<br>";
echo "Last changed: ".date("F d Y H:i:s.", filectime("test.txt"));
echo "<br>";










?>