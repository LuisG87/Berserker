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
    public static function subString(string $text,string $offset,int $length= null):string{
        return substr($text, $offset,$length);
    }


    //Trims
    public static function trimBoth(string $string, string $characters = " \n\r\t\v\x00"): string{
        return trim( $string, $characters);
    }

    public static function trimLeft(string $string,string $characters = " \n\r\t\v\x00"): string{
        return ltrim( $string, $characters);
    }

    public static function trimRight(string $string, string $characters = " \n\r\t\v\x00"): string{
        return rtrim($string, $characters);
    }

    //HTML handlers
    public static function htmlEntities( string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string{
        return htmlentities($string, $flags, $encoding, $double_encode);
    }

    public static function htmlSpecialChars(string $string,int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,?string $encoding = null,bool $double_encode = true): string{
        return htmlspecialchars( $string, $flags, $encoding, $double_encode);
    }

    public static function stripTags(string $string, array|string|null $allowed_tags = null): string{
        return strip_tags($string,$allowed_tags);
    }

    public static function addSlashes(string $string): string{
        return addslashes($string);
    }

    //Strings and arrays
    public static function implode(string $separator, array $array): string{
        return implode($separator, $array);
    }

    public static function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array{
        return explode($separator, $string, $limit);
    }

    //StringPositions
    public static function chopFromString(string $haystack, string $needle, bool $before_needle = false): string|false{
        return strstr($haystack, $needle, $before_needle);
    }

    public static function findFirstPosition(string $haystack, string $needle, int $offset = 0): int|false{
        return stripos($haystack, $needle, $offset);
    }
    
    //existence
    public static function contains(string $haystack, string $needle): bool{
        return str_contains($haystack, $needle);
    }

    //
    public static function length(string $string): int{
        return strlen($string);
    }
    
    public static function binToHex(string $string): string{
        return bin2hex($string);
    }

    public static function csvToArray(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array{
        return str_getcsv($string, $separator, $enclosure, $escape);
    }
    
    public static function uppercase(string $string): string{
        return strtoupper($string);
    }

    public static function lowercase(string $string): string{
        return strtolower($string);
    }

}



    
