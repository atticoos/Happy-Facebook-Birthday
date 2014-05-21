<?php

namespace FacebookBirthday\Model;

use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model
{
    /**
     * Prepend the model namespace to our given class string
     *
     * @param string $class_string
     * @static
     * @access public
     * @return string
     */
    public static function prependNamespace($class_string)
    {
        return __NAMESPACE__ .'\\'. $class_string;
    }
}
