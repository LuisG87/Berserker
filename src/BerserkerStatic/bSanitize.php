<?php
/**
 * Berserker - made by blastcoding.com
 * bSanitize is not intended to be use with input thats why is using filter var
 * *Allways use BValidate first. bSantize will filter after sanitization too for now.
 */
class bSanitize{
 
    public function __construct()
    {
        
    }


    /**
     * utilize FILTER_SANITIZE_ENCODE to sanitize a url or others paths
     * utilize url method instead if you are sanitizing urls
     * @param mixed $var variable
     * @return mixed
     */
    public static function encoded(mixed $var):mixed{
        $aux = filter_var($var, FILTER_SANITIZE_ENCODED);
        return $aux;
    }

    /**
     * Sanitizes a value that must be integer
     * @param mixed $var variable
     * @return mixed
     */
    public static function Integer(mixed $var):mixed{
        $aux = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
        $aux = filter_var($aux,FILTER_VALIDATE_INT);
        return $aux;
    }


    /**
     * Sanitizes a value that must be float
     * @param mixed $var variable
     * @return mixed
     */
    public static function float(mixed $var):mixed{
        $aux = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT);
        $aux = filter_var($aux,FILTER_VALIDATE_FLOAT);
        return $aux;
    }

    
     /**
     * input filter for url
     * @param mixed $var
     * @return false|string
     */
    public static function url(mixed $var):mixed{
        $url = filter_var($var, FILTER_SANITIZE_URL);
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
     * Sanitizes a value that represents an email
     * @param mixed $var variable
     * @return mixed
     */
    public static function email(mixed $var):mixed{
        $aux = filter_var($var, FILTER_SANITIZE_EMAIL);
        $aux = filter_var($aux,FILTER_VALIDATE_EMAIL);
        return $aux;
    }
    
    /**
     * Sanitizes a text
     * @param string $var variable
     * @return string
     */
    public static function text(string $var){
        return htmlspecialchars($var);
    }
}