<?php

//bStrings
$subString = $bStrings->subString("Welcome to berserker",10,10);
$replace = $bStrings->replace("berserker","PAPA","Welcome to berserker");



$hdrs1 = <<<HTML
    <h1>Welcome to berserker text file</h1>
    <p>Im testing in these way instead of using spect cause the methods are based in the original PHP functions and 1 test is more than enough</p>
    <h2>bStrings methods</h2><hr/>
    <div class='sub_section'>
        <h3>subString</h3>
        {$subString}

        <h3>replace</h3>
        {$replace}
    </div>

    <h2>bArrays methods</h2><hr/>
    <div class='sub_section'>

    </div>
HTML;

$bStrings->render($hdrs1);


    
    