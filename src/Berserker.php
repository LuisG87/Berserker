<?php
namespace Berserker;


enum Flags {
    case BERSERKER_STATIC;
    case BERSERKER_IMETHOD;
}
class Berserker{

    public function __construct($flag = null){       
        if($flag==null){
            $this->berserkerImplementation(Flags::BERSERKER_STATIC);
        }else{
            try{
                $this->berserkerImplementation(Flags::BERSERKER_IMETHOD);
            }catch(Exception $e){
                die("error specifing the flag".$e);
            }
        }
    }
    public function changeImplementation($flag){
        $this->berserkerImplementation(Flags::$flag);
    }

    private function berserkerImplementation(Flags $flag): void {
        $bflag = (function()use($flag){
            return match ($flag) {
                Flags::BERSERKER_STATIC => $this->bLoadStatics(),
                Flags::BERSERKER_IMETHOD => $this->bLoadIMethod()
            };
        })();
    
        if($bflag == "error_static_load"){
            die("berserker static couldnt load");
        }else if($bflag == "error_imethod_load"){
            die("berserker imethod couldnt load");
        }
    }
    
    private function bLoadStatics():string{
        try{
            require_once("berserkerStatic/bStrings.php");
            require_once("berserkerStatic/bArrays.php");
            require_once("berserkerStatic/bFilters.php");
            require_once("berserkerStatic/bRegex.php");
            return "static_loaded";
        }catch(Exception $e){
            return "error_static_load";
        }
    }
    
    private function bLoadIMethod():string{
        try{
            require_once("imethod/bStrings.php");
            require_once("imethod/bArrays.php");
            require_once("imethod/bFilters.php");
            require_once("imethod/bRegex.php");
            return "imethod_loaded";
        }catch(Exception $e){
            return "error_imethod_load";
        }
    }
}


