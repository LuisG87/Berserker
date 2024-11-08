<?php

class bArrays{

    public function __construct(){

    }

    /**
     * Changes the case of all keys in an array to uppercase
     * @param array $array
     * @return array
     */
    public function uppercaseKeys($array):array{
        return array_change_key_case( $array, CASE_UPPER);
    }

    /**
     * Changes the case of all keys in an array to lowercase
     * @param array $array
     * @return array
     */
    public function lowercaseKeys($array):array{
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
    public function chunk(array $array, int $length, bool $preserve_keys = false): array{
        return array_chunk($array, $length, $preserve_keys);
    }

    /**
     * Return the values from a single column in the input array
     * @param array $array
     * @param int|string|null $column_key
     * @param int|string|null $index_key
     * @return array
     */
    public function column(array $array, int|string|null $column_key, int|string|null $index_key = null): array{
        return array_column($array, $column_key, $index_key);
    }

    /**
     * Checks if a value exists in an array
     * @param mixed $needle
     * @param array $haystack
     * @param bool $strict
     * @return bool
     */
    public function valueExists(mixed $needle, array $haystack, bool $strict = false): bool{
        return in_array($needle, $haystack, $strict);
    }

    /**
     * Checks if the given key or index exists in the array
     * @param string|int|float|bool|null $key
     * @param array $array
     * @return bool
     */
    public function keyExists(string|int|float|bool|null $key, array $array): bool{
        return array_key_exists($key, $array);
    }

    /**
     * Counts the occurrences of each distinct value in an array
     * @param array $array
     * @return array
     */
    public function valueOccurrences(array $array): array{
        return array_count_values($array);
    }

    /**
     * Sort an array in ascending order
     * @param array
     * @param int $flags -FLAG(@see sort native function)
     * @return true - never fails
     */
    public function ascendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return sort($array, $flags);
    }

    /**
     * Sort an array in descending order
     */
    public function descendingSort(array &$array, int $flags = SORT_REGULAR): true{
        return rsort($array, $flags);
    }

    /**
     * Sort an array by key in ascending order
     */
    public function ascendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return ksort($array, $flags);
    }

    /**
     * Sort an array by key in descending order
     */
    public function descendingKeySort(array &$array, int $flags = SORT_REGULAR): true{
        return krsort($array, $flags);
    }

    /**
     * Return all the keys or a subset of the keys of an array
     */
    public function keys(array $array, mixed $filter_value = null, bool $strict = false): array{
        return array_keys($array, $filter_value, $strict);
    }

    /**
     * Gets the first key of an array
     * @param array $array
     * @return int|string|null
     */
    public function firstKey(array $array): int|string|null{
        return array_key_first($array);
    }

    /**
     * Gets the last key of an array
     * @param array $array
     * @return int|string|null
     */
    public function lastKey(array $array): int|string|null{
        return array_key_last($array);
    }

    /**
     * reverse an array ↑↓
     * @param array $array
     * @param bool $preserve_keys
     * @return array
     */
    public function reverse(array $array, bool $preserve_keys = false): array{
        return array_reverse($array, $preserve_keys);
    }


    /**
     * add a new element or more at the end of the array
     * @param array $array
     * @param mixed ...$values
     * @return int - array length
     */
    public function push(array &$array, mixed ...$values): int{
        return array_push($array, ...$values);
    }

    /**
     * add a new element or more at the end of the array
     * @param array $array
     * @param mixed ...$values
     * @return int - array length
     */
    public function append(array &$array, mixed ...$values): int{
        return array_push($array, ...$values);
    }

    /**
     * remove the last element in the specified array
     * Alias of array_pop
     * @param array $array
     * @return mixed
     */
    public function pop(array &$array): mixed{
        return array_pop($array);
    }

    /**
     * remove the last element in the specified array
     * Alias of array_pop
     * @param array $array
     * @return mixed - return the removed value, null if the array is empty
     */
    public function removeLast(array &$array): mixed{
        return array_pop($array);
    }
    
    /**
     * remove the first element of an array
     * Alias of array_shift
     * @param array $array
     * @return mixed - the removed value or null if is empty or not an array
     */
    public function shift(array &$array): mixed{
        return array_shift($array);
    }

    /**
     * remove the first element of an array
     * Alias of array_shift
     * @param array $array
     * @return mixed - the removed value or null if is empty or not an array
     */
    public function removeFirst(array &$array): mixed{
        return array_shift($array);
    }

     /**
     * Add a new element or more at the left of the array ←[a,b,c]
     * Alias of array_ushift
     * @param array $array
     * @param mixed $values
     * @return int -length of the array
     */
    public function unshift(array &$array, mixed ...$values): int{
        return array_unshift($array, ...$values);
    }

    /**
     * Add a new element or more at the left of the array ←[a,b,c]
     * Alias of array_ushift
     * @param array $array
     * @param mixed $values
     * @return int -length of the array
     */
    public function prepend(array &$array, mixed ...$values): int{
        return array_unshift($array, ...$values);
    }

    /**
     * get all the values in the array as an array
     * alias of array_values
     * @param array $array
     * @return array
     */
    public function values(array $array): array{
        return array_values($array);
    }

    /**
     *  Removes duplicate values from an array
     * alias of array_unique
     * @param array $array
     * @param int $flags posible values(SORT_REGULAR|SORT_NUMERIC|SORT_STRING|SORT_LOCALE_STRING)
     * @return array
     */
    public function unique(array $array, int $flags = SORT_STRING): array{
        return array_unique($array, $flags);
    }

    /**
     * Give back the  length of the array
     * alias of count
     * @param Countable|array $value
     * @param int $mode
     * @return int
     */
    public function length(Countable|array $value, int $mode = COUNT_NORMAL): int{
        return count($value, $mode);
    }
    
    /**
     * Calculate the sum of values in an array - please use it on arrays that has values
     * alias of array_sum 
     * @param array $array
     * @return int|float
     */
    public function sumValues(array $array): int|float{
        return array_sum($array);
    }

    /**
     * Searches the array for a given value and returns the first corresponding key if successful
     * alias of array_search
     * @param mixed $needle
     * @param array $haystack
     * @param bool $strict
     * @return int|string|false will return false if no value found
     */
    public function search(mixed $needle, array $haystack, bool $strict = false): int|string|false{
        return array_search($needle, $haystack, $strict);
    }

    /**
     * Create array containing variables and their values
     * alias of compact
     * @param array|string $var_name
     * @param array|string ...$var_names
     * @return array
     */
    public function makeFrom(array|string $var_name, array|string ...$var_names): array{
        return compact($var_name, ...$var_names);
    }


    /**
     * Extract a slice of the array
     * alias of array_slice
     * @param array $array,
     * @param int $offset,
     * @param ?int $length = null,
     * @param bool $preserve_keys = false
     * @return array
     */
    public function slice(array $array, int $offset, ?int $length = null, bool $preserve_keys = false): array{
        return array_slice($array, $offset, $length, $preserve_keys);
    }

    /**
     * Extract a slice of the array
     * alias of array_slice, and slice method.
     * @param array $array,
     * @param int $offset,
     * @param ?int $length = null,
     * @param bool $preserve_keys = false
     * @return array
     */
    public function portion(array $array, int $offset, ?int $length = null, bool $preserve_keys = false): array{
        return array_slice($array, $offset, $length, $preserve_keys);
    }
}

global $bArrays;
$bArrays = new bArrays();

