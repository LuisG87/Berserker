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

    public static function replace(array|string $search,array|string $replace,string|array $subject,int &$count = null): string|array{
        return str_replace($search, $replace, $subject, $count);
    }

    public static function CRC32(string $string): int{
        return crc32($string);
    }
    
    public static function echo(string ...$expressions): void{
        echo($expressions);
    }

    public static function hebrev(string $string, int $max_chars_per_line = 0): string{
        return hebrev($string, $max_chars_per_line);
    }

    public static function hexToBin(string $string): string|false{
        return hex2bin($string);
    }
    public static function lowercase1stChar(string $string): string{
        return lcfirst($string);
    }
    public static function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int{
        return levenshtein($string1, $string2, $insertion_cost, $replacement_cost, $deletion_cost);
    }


    /**
     *  Get numeric formatting information, locale conversion of currency symbol etc
     * @see localeconv() native function
     * @see setlocale() native function
     */
    public static function localConversion(): array{
        return localeconv();
    }

    public static function numFormat(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string{
        return number_format($num, $decimals, $decimal_separator, $thousands_separator);
    }

    public static function similarities(string $string1, string $string2, float &$percent = null): int{
        return similar_text( $string1, $string2, $percent);
    }

    public static function parseWithFormat(string $string, string $format, mixed &...$vars): array|int|null{
        return sscanf($string, $format, $vars);
    }

    public static function decrement(string $string): string{
        return str_decrement($string);
    }

    public static function isEndedWith(string $haystack, string $needle): bool{
        return str_ends_with($haystack, $needle);
    }

    /**
     *  Increment an alphanumeric string, Examples A ↑ = B // A1 ↑ = A2
     */
    public static function increment(string $string): string{
        return str_increment($string);
    }

    public static function isStartedWith(string $haystack, string $needle): bool{
        return str_starts_with($haystack, $needle);
    }

    public static function stripSlashes(string $string): string{
        return stripslashes($string);
    }

    public static function compareByNatOrd(string $str1, string $str2): int{
        return strnatcmp($str1, $str2);
    }

    public static function compareCaseIgnore(string $string1, string $string2): int{
        return strcasecmp($string1, $string2);
    }

    public static function compare(string $string1, string $string2): int{
        return strcmp($string1, $string2);
    }
    public static function reverse(string $string): string{
        return strrev($string);
    }
}



    
