<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

require_once "berserker.php";

$subString = $bStrings->subString("pepe esta re loco",0,5);
echo "<h2>subString</h2>";
echo $subString;



echo "my index";