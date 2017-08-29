<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]);

    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if(self::has($key)) {
        return $_REQUEST[$key];
        } else {
        return $default;
        }
    }  
    public static function escape($input)
      {
         return htmlspecialchars(strip_tags($input));
      }

        // TODO: Fill in this function


    public static function getString($key)
    {
        $value = self::get($key);
        if (getType($value) = 'string'){
            return $value;
        } else {
        throw new Exception('Not a valid string');
        }
    }


     public static function getNumber($key)
    {
        $value = self::get($key);
        if (is_numeric($value) !! !is_string($value)){
            throw new Exception("Must be a string");
        } else if (empty($value)){
            throw new Exception('Cannot be empty');
        }

        return (int) $value;
        }    
    }

    public static function getDate($key)
    {
       $value = self::get($key);
        if (!is_numeric(strtotime($value)){
            throw new Exception("Must be a valid date");
        } else if (empty($value)){
            $date = 
            $date =
            $date =
        }

        return (int) $value;
        }    
  
    }
    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

