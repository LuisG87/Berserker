<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
//require 'vendor/autoload.php';
require 'src/Berserker.php';
use Berserker\Berserker;
$X="BERSERKER_IMETHOD";
new Berserker($X);

?>
<style>
.sub_section{
    padding:0px 20px;
}
</style>

<?php

echo "<h1>Welcome to berserker text file</h1>";
echo "<p>Im testing in these way instead of using spect cause the methods are based in the original PHP functions and 1 test is more than enough</p>";
//bstrings methods
echo "<h2>bStrings methods</h2><hr/>";
echo "<div class='sub_section'>";

if( isset($X) ){

    $subString = $bStrings->subString("Welcome to berserker",10,10);
    echo "<h3>subString</h3>";
    echo $subString;

    $replace = $bStrings->replace("berserker","PAPA","Welcome to berserker");
    echo "<h3>replace</h3>";
    echo $replace;


    echo "</div>";
    //bArrays methods
    echo "<h2>bArrays methods</h2><hr/>";
    echo "<div class='sub_section'>";

    echo "</div>";
}else{
    $subString = bStrings::subString("Welcome to berserker",10,10);
    echo "<h3>subString</h3>";
    echo $subString;

    $replace = bStrings::replace("berserker","PAPA","Welcome to berserker");
    echo "<h3>replace</h3>";
    echo $replace;


    echo "</div>";
    //bArrays methods
    echo "<h2>bArrays methods</h2><hr/>";
    echo "<div class='sub_section'>";

    echo "</div>";
}