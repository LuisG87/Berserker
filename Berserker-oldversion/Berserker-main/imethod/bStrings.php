<?php
/**
*  Berserker
* Classes for PHP Language
*/

class bStrings{

    public function __construct(){

    }

    /**
     * subString
     * gives u a substring from a position with a length
     * @param string $text
     * @param string $offset
     * @param  int $length
     * @return string
     */
    public function subString(string $text,string $offset,int $length= null):string{
        return substr($text, $offset,$length);
    }


    //Trims
    public function trimBoth(string $string, string $characters = " \n\r\t\v\x00"): string{
        return trim( $string, $characters);
    }

    public function trimLeft(string $string,string $characters = " \n\r\t\v\x00"): string{
        return ltrim( $string, $characters);
    }

    public function trimRight(string $string, string $characters = " \n\r\t\v\x00"): string{
        return rtrim($string, $characters);
    }

    //HTML handlers
    public function htmlEntities( string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string{
        return htmlentities($string, $flags, $encoding, $double_encode);
    }

    public function htmlSpecialChars(string $string,int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,?string $encoding = null,bool $double_encode = true): string{
        return htmlspecialchars( $string, $flags, $encoding, $double_encode);
    }

    public function stripTags(string $string, array|string|null $allowed_tags = null): string{
        return strip_tags($string,$allowed_tags);
    }

    public function addSlashes(string $string): string{
        return addslashes($string);
    }

    //Strings and arrays
    public function implode(string $separator, array $array): string{
        return implode($separator, $array);
    }

    public function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array{
        return explode($separator, $string, $limit);
    }

    //StringPositions
    public function chopFromString(string $haystack, string $needle, bool $before_needle = false): string|false{
        return strstr($haystack, $needle, $before_needle);
    }

    public function findFirstPosition(string $haystack, string $needle, int $offset = 0): int|false{
        return stripos($haystack, $needle, $offset);
    }
    
    //existence
    public function contains(string $haystack, string $needle): bool{
        return str_contains($haystack, $needle);
    }

    //
    public function length(string $string): int{
        return strlen($string);
    }
    
    public function binToHex(string $string): string{
        return bin2hex($string);
    }

    public function csvToArray(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array{
        return str_getcsv($string, $separator, $enclosure, $escape);
    }
    
    public function uppercase(string $string): string{
        return strtoupper($string);
    }

    public function lowercase(string $string): string{
        return strtolower($string);
    }

}


global $bStrings;
$bStrings = new bStrings();
