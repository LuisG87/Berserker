<?php

class bArrays{


    /**
     * Changes the case of all keys in an array to uppercase
     * @param array $array
     * @return array
     */
    public static function uppercaseKeys($array):array{
        return array_change_key_case( $array, CASE_UPPER);
    }

    /**
     * Changes the case of all keys in an array to lowercase
     * @param array $array
     * @return array
     */
    public static function lowercaseKeys($array):array{
        return array_change_key_case( $array, CASE_LOWER);
    }

    /**
     * Split an array into chunks
     * creates an array with subarrays with a max length specified by $length
     * @param array $array
     * @param int $length
     * @param bool $preserve_keys
     * @return array
     */
    public static function chunk(array $array, int $length, bool $preserve_keys = false): array{
        return array_chunk($array, $length, $preserve_keys);
    }

    /**
     * Return the values from a single column in the input array
     * @param array $array
     * @param int|string|null $column_key
     * @param int|string|null $index_key
     * @return array
     */
    public static function column(array $array, int|string|null $column_key, int|string|null $index_key = null): array{
        return array_column($array, $column_key, $index_key);
    }

    /**
     * Checks if a value exists in an array
     * @param mixed $needle
     * @param array $haystack
     * @param bool $strict
     * @return bool
     */
    public static function valueExists(mixed $needle, array $haystack, bool $strict = false): bool{
        return in_array($needle, $haystack, $strict);
    }

    /**
     * Checks if the given key or index exists in the array
     * @param string|int|float|bool|null $key
     * @param array $array
     * @return bool
     */
    public static function keyExists(string|int|float|bool|null $key, array $array): bool{
        return array_key_exists($key, $array);
    }

    /**
     * Counts the occurrences of each distinct value in an array
     * @param array $array
     * @return array
     */
    public static function valuesOccurrences(array $array): array{
        return array_count_values($array);
    }

    /**
     * Sort an array in ascending order
     * @param array
     * @param int $flags -FLAG(@see sort native function)
     * @return true - never fails
     */
    public static function ascendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return sort($array, $flags);
    }

    /**
     * Sort an array in descending order
     */
    public static function descendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return rsort($array, $flags);
    }

    /**
     * Sort an array by key in ascending order
     */
    public static function ascendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return ksort($array, $flags);
    }

    /**
     * Sort an array by key in descending order
     */
    public static function descendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return krsort($array, $flags);
    }

     /**
     * Return all the keys or a subset of the keys of an array
     */
    public static function keys(array $array, mixed $filter_value = null, bool $strict = false): array{
        return array_keys($array, $filter_value, $strict);
    }

    /**
     *  Gets the first key of an array
     */
    public static function firstKey(array $array): int|string|null{
        return array_key_first($array);
    }

    /**
     * Gets the last key of an array
     */
    public static function lastKey(array $array): int|string|null{
        return array_key_last($array);
    }

}
