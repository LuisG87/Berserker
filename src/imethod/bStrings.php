<?php

/**
*  Berserker
* Classes for PHP Language
*/

class bStrings{

    public function __construct(){

    }

    /**
     * gives u a substring from a position with a length
     * @param string $text
     * @param string $offset
     * @param  int $length
     * @return string
     */
    public function subString(string $text, string $offset, int $length= null):string{
        return substr($text, $offset,$length);
    }


    /**
     * eliminates all white spaces at both sides of the text
     * Example of _ are white spaces entonces __text__  luego de trim => text
     * @param string $string
     * @param string $characters
     * @return string
     */
    public function trimBoth(string $string, string $characters = " \n\r\t\v\x00"): string{
        return trim( $string, $characters);
    }

    /**
     * added as an alias of trimBoth 
     * Example of _ are white spaces entonces __text__  luego de trim => text
     * @param string $string
     * @param string $characters
     * @return string
     */
    public function trim(string $string, string $characters = " \n\r\t\v\x00"): string{
        return trim( $string, $characters);
    }

    /**
     * Strip whitespace (or other characters) from the beginning of a string
     * @param string $string
     * @param string $character
     * @return string
     */
    public function trimLeft(string $string,string $characters = " \n\r\t\v\x00"): string{
        return ltrim( $string, $characters);
    }

    /**
     * Strip whitespace (or other characters) from the end of a string
     * @param string $string
     * @param string $characters
     * @return string
     */
    public function trimRight(string $string, string $characters = " \n\r\t\v\x00"): string{
        return rtrim($string, $characters);
    }

    /**
     * Convert all applicable characters to HTML entities
     * @param string $string
     * @param int $flags
     * @param string $encoding
     * @param bool $double_encode
     * @return string
     * @see htmlentities
     * @link https://www.php.net/manual/en/function.htmlentities.php
     */
    public function htmlEntities( string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string{
        return htmlentities($string, $flags, $encoding, $double_encode);
    }

    /**
     * Convert special characters to HTML entities
     * @param string $string
     * @param int $flags
     * @param string $encoding
     * @param bool $doble_encode
     * @return string
     */
    public function htmlSpecialChars(string $string,int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,?string $encoding = null,bool $double_encode = true): string{
        return htmlspecialchars( $string, $flags, $encoding, $double_encode);
    }

    /**
     * Strip HTML and PHP tags from a string
     * @param string $string
     * @param rray|string|null $allowed_tags
     * @return string
     */
    public function stripTags(string $string, array|string|null $allowed_tags = null): string{
        return strip_tags($string,$allowed_tags);
    }

    /**
     * Quote string with slashes
     * @param string $string
     * @return string
     */
    public function addSlashes(string $string): string{
        return addslashes($string);
    }

    /**
    * Join array elements with a string
    * @param string $sepaator
    * @param array $array
    * @return string
    */
    public function implode(string $separator, array $array): string{
        return implode($separator, $array);
    }

    /**
     * Split a string by a string
     * @param string $separator
     * @param string $string
     * @param int $limit
     * @return array
     */
    public function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array{
        return explode($separator, $string, $limit);
    }

    /**
     *  Find the first occurrence of a string
     * @param string $haystack
     * @param string $needle
     * @param bool $before_needle
     * @return string|false
     */
    public function chopFromString(string $haystack, string $needle, bool $before_needle = false): string|false{
        return strstr($haystack, $needle, $before_needle);
    }

    /**
     * Find the position of the first occurrence of a case-insensitive substring in a string
     * @param string $haystack
     * @param string $needle
     * @param int $offset
     * @return int|false
     */
    public function findFirstPosition(string $haystack, string $needle, int $offset = 0): int|false{
        return stripos($haystack, $needle, $offset);
    }
    
    /**
     * Determine if a string contains a given substring
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public function contains(string $haystack, string $needle): bool{
        return str_contains($haystack, $needle);
    }

    /**
     * Get string length
     * @param string $string
     * @return int
     */
    public function length(string $string): int{
        return strlen($string);
    }
    
    /**
     * Convert binary data into hexadecimal representation
     * @param string $string
     * @return string
     */
    public function binToHex(string $string): string{
        return bin2hex($string);
    }


    /**
     *  Parse a CSV string into an array
     * @param string $string
     * @param string $separator
     * @param string $enclosure
     * @param string $escape
     * @return array
     */
    public function csvToArray(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array{
        return str_getcsv($string, $separator, $enclosure, $escape);
    }

    /**
     * Make a string uppercase
     * @param string $string
     * @return string
     */
    public function uppercase(string $string): string{
        return strtoupper($string);
    }

    /**
     * Make a string lowercase
     * @param string $string
     * @return string
     */
    public function lowercase(string $string): string{
        return strtolower($string);
    }

    /**
     * Replace all occurrences of the search string with the replacement string
     * @param array|string $search
     * @param array|string $replace
     * @param int -number of times to replace
     * @return string|array
     */
    public function replace(array|string $search,array|string $replace,string|array $subject,int &$count = null): string|array{
        return str_replace($search, $replace, $subject, $count);
    }

    /**
     * Calculates the crc32 polynomial of a string
     * @param string $string
     * @return int
     */
    public function CRC32(string $string): int{
        return crc32($string);
    }
    
    /**
     * Output one or more strings
     * @param string ...$expresion
     * @return void
     */
    public function echo(string ...$expressions): void{
        echo($expressions);
    }

    /**
     * Convert logical Hebrew text to visual text
     * @param string $string
     * @param int max_chars_per_line
     * @return string
     */
    public function hebrev(string $string, int $max_chars_per_line = 0): string{
        return hebrev($string, $max_chars_per_line);
    }

    /**
     * Decodes a hexadecimally encoded binary string
     * @param string $string
     * @return string|false
     */
    public function hexToBin(string $string): string|false{
        return hex2bin($string);
    }

    /**
     * Make a string's first character lowercase
     * @param string $string
     * @return string
     */
    public function lowercase1stChar(string $string): string{
        return lcfirst($string);
    }

    /**
     * Calculate Levenshtein distance between two strings
     * @param string $string1
     * @param string $string2
     * @param int $insertion_cost
     * @param int $replacement_cost
     * @param int $deletion_cost
     * @return int
     */
    public function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int{
        return levenshtein($string1, $string2, $insertion_cost, $replacement_cost, $deletion_cost);
    }


    /**
     *  Get numeric formatting information, locale conversion of currency symbol etc
     * @see localeconv() native function
     * @see setlocale() native function
     */
    public function localConversion(): array{
        return localeconv();
    }

    /**
     * Format a number with grouped thousands
     * @param float $num
     * @param int $decimal
     * @param string $decimal_separator
     * @param string $thousands_separator
     * @return string
     */
    public function numFormat(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string{
        return number_format($num, $decimals, $decimal_separator, $thousands_separator);
    }

    /**
     * Calculate the similarity between two strings
     * @param string $string1
     * @param string $string2
     * @param float percent (default = null)
     * @return int
     */
    public function similarities(string $string1, string $string2, float &$percent = null): int{
        return similar_text( $string1, $string2, $percent);
    }

    /**
     * Parses input from a string according to a format
     * @param string $string
     * @param string $format
     * @param mixed $vars
     * @return array|int|null
     */
    public function parseWithFormat(string $string, string $format, mixed &...$vars): array|int|null{
        return sscanf($string, $format, $vars);
    }

    /**
     * Decrement an alphanumeric string
     * @param string $string
     * @return string
     */
    public function decrement(string $string): string{
        return str_decrement($string);
    }

    /**
     * Checks if a string ends with a given substring
     * @param string $haystack -is the text or the string
     * @param string $needle -is the substring
     * @return bool
     */
    public function isEndedWith(string $haystack, string $needle): bool{
        return str_ends_with($haystack, $needle);
    }

    /**
     *  Increment an alphanumeric string, Examples A ↑ = B // A1 ↑ = A2
     * @param string $string
     * @return string
     * @see str_increment
     */
    public function increment(string $string): string{
        return str_increment($string);
    }

    /**
     * Checks if a string starts with a given substring
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public function isStartedWith(string $haystack, string $needle): bool{
        return str_starts_with($haystack, $needle);
    }

    /**
     * removes backslashes (\) from a string
     * @param string $string
     * @return string string without backslashes
     */
    public function stripSlashes(string $string): string{
        return stripslashes($string);
    }

    /**
     * String comparisons using a "natural order" algorithm
     *@param string $string1
     *@param string $string2
     *@return int
     *@see strnatcmp @link https://www.php.net/manual/en/function.strnatcmp.php
     */
    public function naturalOCompare(string $str1, string $str2): int{
        return strnatcmp($str1, $str2);
    }

    /**
     *  Binary safe case-insensitive string comparison
     * @param string $string1
     * @param string $string2
     * @return int -1 or 1, 0 if equal
     * @see strcasecmp
     * @link https://www.php.net/manual/en/function.strcasecmp.php
     */
    public function compareCaseIgnore(string $string1, string $string2): int{
        return strcasecmp($string1, $string2);
    }

    /**
     *Binary safe string comparison
     *Returns -1 if string1 is less than string2; 1 if string1 is greater than string2, and 0 if they are equal.
     *@param string $string1
     *@param string $string2
     *@return int -1 or 1, 0 if equal
     *@see strcmp
     */
    public function compare(string $string1, string $string2): int{
        return strcmp($string1, $string2);
    }

    /**
     * Reverse the text of a string
     * @param string $string the string to be reverted
     * @see strrev($string) php native function
     */
    public function reverse(string $string): string{
        return strrev($string);
    }
}


global $bStrings;
$bStrings = new bStrings();
