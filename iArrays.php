<?php
class iArrays{


    /**
     * 
     */
    public static function uppercase($array):array{
        return array_change_key_case( $array, CASE_UPPER);
    }

    /**
     * 
     */
    public static function lowercase($array):array{
        return array_change_key_case( $array, CASE_LOWER);
    }

    /**
     * 
     */
    public static function chunk(array $array, int $length, bool $preserve_keys = false): array{
        return array_chunk($array, $length, $preserve_keys);
    }

    /**
     * 
     */
    public static function column(array $array, int|string|null $column_key, int|string|null $index_key = null): array{
        return array_column($array, $column_key, $index_key);
    }

    /**
     * 
     */
    public static function valueExists(mixed $needle, array $haystack, bool $strict = false): bool{
        return in_array($needle, $haystack, $strict);
    }

    /**
     * 
     */
    public static function keyExists(string|int|float|bool|resource|null $key, array $array): bool{
        return array_key_exists($key, $array);
    }

    /**
     * 
     */
    public static function valueOccurrences(array $array): array{
        return array_count_values($array);
    }

    /**
     * 
     */
    public static function ascendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return sort($array, $flags);
    }

    /**
     * 
     */
    public static function descendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return rsort($array, $flags);
    }

    /**
     * 
     */
    public static function ascendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return ksort($array, $flags);
    }

    /**
     * 
     */
    public static function descendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return krsort($array, $flags);
    }

    /**
     * 
     */
    public static function keys(array $array, mixed $filter_value = null, bool $strict = false): array{
        return array_keys($array, $filter_value, $strict);
    }

    /**
     * 
     */
    public static function firstKey(array $array): int|string|null{
        return array_key_first($array);
    }

    /**
     * 
     */
    public static function lastKey(array $array): int|string|null{
        return array_key_last($array);
    }

}
