<?php

class bFilters{

    public function __construct()
    {
        
    }

    /**
     * shows you the list of filters,
     *  pratically not of use with berserk
     */
    public static function list():array{
        return filter_list();
    }

    /**
     * the classic var filter 
     */
    public static function variable(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed{
        return filter_var($value,$filter,$options);
    }
    

    /**
     * the classic input filter - use this input filter if the other input filter do not match what you want
     */
    public static function input( int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed{
        return filter_input($type, $var_name, $filter, $options);
    }

    /**
     * sanitization for email 
     * @param $var name of the $_POST variable(default value = email)
     * @return mixed
     */
    public static function input_email($var = "email"):mixed{
        $email = filter_input(INPUT_POST, $var, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);
        return $email;
    }
    
    /**
     * input filter for url
     */
    public static function input_url($var = "url"):mixed{
        $url = filter_input(INPUT_POST, $var, FILTER_SANITIZE_URL);
        $url = filter_var($url,FILTER_VALIDATE_URL);
        if($url){
            $parsed_url = parse_url($url);

            // Only allow http and https protocols
            $allowed_schemes = ['http', 'https'];
            if (!in_array($parsed_url['scheme'], $allowed_schemes)) {
                return false;
            }
            if (!preg_match('/^(https?:\/\/)([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $url)) {
                return false;
            }
        }
        return $url;
    }

    /**
     * This is an input filter for integer
     */
    public static function input_int($var):mixed{
        $aux = filter_input(INPUT_POST, $var, FILTER_SANITIZE_NUMBER_INT);
        $aux = filter_var($aux,FILTER_VALIDATE_INT);
        return $aux;
    }

    /**
     * filter for a validate for ips 
     * POST only
     * @param string $var
     * @return mixed (string|false|null)
     */
    public static function input_ip($var="ip"):mixed{
        $ip = filter_input(INPUT_POST, $var, FILTER_VALIDATE_IP);
        return $ip;
    }

    /**
     * this filter do a validate domain for HTTP POST vars
     * @param string $var
     * @return mixed (string|false|null)
     */
    public static function input_domain($var = "domain"):mixed{
        $domain = filter_input(INPUT_POST, $var, FILTER_VALIDATE_DOMAIN);
        return $domain;
    }

    /**
     * a filter for international phones, and  has a regex that you can change if u want
     * for POST Only
     * @param string $var is the name of the post value you want to filer
     * @param $reg the regex for a International phone
     * @return mixed (string|false|null)
     */
    public static function input_InterPhone($var = "phone",$reg="^\+(?:[0-9\-] ?){6,14}[0-9]$"):mixed{
        $tel = filter_input(INPUT_POST, $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }


    /**
     * this filter was made for local phones, and  has a regex that you can change if u want
     * @param string $var
     * @param string $reg (a regex for local phones default=^([0-9]){0,12}$ )
     * @return mixed (string|false|null)
     */
    public static function input_localPhone($var = "iphone",$reg="^([0-9]){0,12}$"):mixed{
        $tel = filter_input(INPUT_POST, $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }
    
     /**
     * input regex for HTTP post
     * @param string $var
     * @param string $reg (a regex for local phones default=^([0-9]){0,12}$ )
     * @return mixed (string|false|null)
     */
    public static function input_regex(string $var, string $reg):mixed{
        $auxreg = filter_input(INPUT_POST, $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $auxreg;
    }
}