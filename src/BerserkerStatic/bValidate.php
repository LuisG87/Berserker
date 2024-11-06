<?php

class bValidate{
    public function __construct(){

    }
    
    
    /**
     * classic is just an alias of the native filter_input function
     * @param string $type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @param int $filter check in php page the filter constants
     * @param array|int $options
     */
    public static function classic(string $type="post", string $var, int $filter,array|int $option):mixed{
        $var = filter_input(self::decideType($type), $var, $filter,$option);
        return $var;
    }
    
    /**
     * Validation for integers
     * this method secures that you are reciving an integer from an input
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null)
     */
    public static function integer(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_INT);
        return $var;
    }
    
    /**
     * a validation for addresses
     * this method secures that you are reciving an address from an input
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null)
     */
    public static function address(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_REGEXP,[
            'options'=>[
                'regex'=> '/^[a-zA-Z0-9 ]+$/'
            ]
        ]);
        return $var;
    }

    /**
     * a filter for international phones, and  has a regex that you can change if u want (POST is default)
     * @param string $type - posible values (post|get|env|server|cookie)
     * @param string $var is the name of the post value you want to filer
     * @param $reg the regex for a International phone
     * @return mixed (string|false|null)
     */
    public static function globalPhone(string $type="post",$var = "phone",$reg="^\+(?:[0-9\-] ?){6,14}[0-9]$"):mixed{
        $tel = filter_input(self::decideType($type), $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }


    /**
     * this filter was made for local phones, and  has a regex that you can change if u want
     * @param string $type - posible values (post|get|env|server|cookie)
     * @param string $var
     * @param string $reg (a regex for local phones default=^([0-9]){0,12}$ )
     * @return mixed (string|false|null)
     */
    public static function phone(string $type="post", $var = "iphone",string $reg="^([0-9]){0,12}$"):mixed{
        $tel = filter_input(self::decideType($type), $var, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/'.$reg.'/'
            ]
        ]);
        return $tel;
    }    

    /**
     * validate for boolean
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed (string|false|null)
     */
    public static function bool(string $type="post",string $var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_BOOL);
        return $var;
    }

    /**
     * validate for float values
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null)
     */
    public static function float(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_FLOAT);
        return $var;
    }

    /**
     * validate for emails
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null) 
     */
    public static function email(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_EMAIL);
        return $var;
    }

    /**
     * validate ip if necesessary
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null)
     */
    public static function ip(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_IP);
        return $var;
    }

    /**
     * validate a domain
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null) 
     */
    public static function domain(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_DOMAIN);
        return $var;
    }

    /**
     * validate url
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null) 
     */
    public static function url(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_URL);
        return $var;
    }


    /**
     * validate a mac
     * @param string type - posible values (post|get|env|server|cookie)
     * @param string $var name of variable
     * @return mixed  (string|false|null) 
     */
    public static function mac(string $type="post",$var):mixed{
        $var = filter_input(self::decideType($type), $var, FILTER_VALIDATE_MAC);
        return $var;
    }

    /**
     * berserker input decider
     */
    private function decideType(string $type):int{
        return match ($type) {
            'post'      => INPUT_POST,
            'get'       => INPUT_GET,
            'cookie'    => INPUT_COOKIE,
            'env'       => INPUT_ENV,
            'server'    => INPUT_SERVER,
        };
    }
}