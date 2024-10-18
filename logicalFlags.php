<?php
enum Flags {
    case BERSERKER_STATIC;
    case BERSERKER_IMETHOD;
}

function berserkerImplementation(Flags $flag): void {
    $bflag = (function()use($flag){
        return match ($flag) {
            Flags::BERSERKER_STATIC => bLoadStatics(),
            Flags::BERSERKER_IMETHOD => bLoadIMethod()
        };
    })();

    if($bflag == "error_static_load"){
        die("berserker static couldnt load");
    }else if($bflag == "error_imethod_load"){
        die("berserker imethod couldnt load");
    }
}

function bLoadStatics():string{
    try{
        require_once("static/bStrings.php");
        require_once("static/bArrays.php");
        require_once("static/bFilters.php");
        return "static_loaded";
    }catch(Exception $e){
        return "error_static_load";
    }
}

function bLoadIMethod():string{
    try{
        require_once("imethod/bStrings.php");
        require_once("imethod/bArrays.php");
        require_once("imethod/bFilters.php");
        return "imethod_loaded";
    }catch(Exception $e){
        return "error_imethod_load";
    }
}