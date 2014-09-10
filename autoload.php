<?php

class MyAutoloader
{
    public static function load($className)
    {
    	error_log(__NAMESPACE__);
        require 'Class/' . __NAMESPACE__ . $className . '.php';
    }
}

spl_autoload_register(__NAMESPACE__ . "\\MyAutoloader::load");
