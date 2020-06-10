<?php
$d = date("Y");
$x = $d + 1;
$y = $d."/".$x;
$f = rand(0, 99999);
$entid 		= "PMS/Entrance/$f";

echo $entid;
?>