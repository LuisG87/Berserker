<?php

namespace Berserker;

class iFilters{

    public function __construct()
    {
        
    }

    public static function list():array{
        return filter_list();
    }

    public static function var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed{
        return filter_var($value,$filter,$options);
    }

    public static function input( int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed{
        return filter_input($type, $var_name, $filter, $options);
    }

    public static function input_email($var):mixed{
        $email = filter_input(INPUT_POST, $var, FILTER_VALIDATE_EMAIL);
        return $email;
    }
    
    public static function input_url($var):mixed{
        $url = filter_input(INPUT_POST, $var, FILTER_VALIDATE_URL);
        return $url;
    }

    public static function input_int($var):mixed{
        $aux = filter_input(INPUT_POST, $var, FILTER_VALIDATE_INT);
        return $aux;
    }

    public static function input_ip($var):mixed{
        $ip = filter_input(INPUT_POST, $var, FILTER_VALIDATE_IP);
        return $ip;
    }

    public static function input_domain($var):mixed{
        $domain = filter_input(INPUT_POST, $var, FILTER_VALIDATE_DOMAIN);
        return $domain;
    }
    public static function input_InterPhone($var,$reg="^\+(?:[0-9\-] ?){6,14}[0-9]$"):mixed{
        $tel = filter_input(INPUT_POST, $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }
    public static function input_localPhone($var,$reg="^([0-9]){0,12}$"):mixed{
        $tel = filter_input(INPUT_POST, $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }

}