<?php
class bRegex{

    public function __construct(){

    }


    /**
     * Perform a regular expression match
     */
    public static function match(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int|false{
        return preg_match($pattern, $subject, $matches, $flags, $offset);
    }

    /**
     * Perform a global regular expression match
     */
    public static function matchAll(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int|false{
        return preg_match_all($pattern, $subject, $matches, $flags, $offset);
    }

    /**
     * Return array entries that match the pattern
     */
    public static function grep(string $pattern, array $array, int $flags = 0): array|false{
        return preg_grep($pattern, $array, $flags);
    }

    /**
     * Quote regular expression characters
     */
    public static function quote(string $str, ?string $delimiter = null): string{
        return preg_quote($str, $delimiter);
    }

    /**
     * Perform a regular expression search and replace
     */
    public static function filter(string|array $pattern, string|array $replacement, string|array $subject, int $limit = -1, int &$count = null): string|array|null{
        return preg_filter($pattern,$replacement,$subject,$limit,$count);
    }

    /**
     * Perform a regular expression search and replace
     */
    public static function replace(string|array $pattern, string|array $replacement, string|array $subject, int $limit = -1, int &$count = null): string|array|null{
        return preg_replace($pattern,$replacement,$subject,$limit,$count);
    }

    /**
     * Split string by a regular expression
     */
    public static function split( string $pattern, string $subject, int $limit = -1, int $flags = 0): array|false{
        return preg_split( $pattern, $subject, $limit, $flags);
    }

    /**
     * Returns the error code of the last PCRE regex execution
     * @return int - this integer values are represented by constants 
     * @link https://www.php.net/manual/en/function.preg-last-error.php
     */
    public static function lastError(): int{
        return preg_last_error();
    }

    /**
     * Returns the error message of the last PCRE regex execution
     * @return string
     */
    public static function lastErrorMsg(): string{
        return preg_last_error_msg();
    }
}