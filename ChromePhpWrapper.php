<?php
class ChromePhpWrapper extends ChromePhp
{
    private static $enabled = true;

    public static function setEnabled($bool = true)
    {
        self::$enabled = (bool)$bool;
    }

    public static function isEnabled()
    {
        return self::$enabled;
    }

    private static function callParent($method, $params)
    {
        if (self::isEnabled()) {
            return call_user_func_array('parent::' . $method, $params);
        } else {
            return;  // Do nothing
        }
    }

    public static function log()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function warn()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function error()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function group()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function info()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function groupCollapsed()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function groupEnd()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }

    public static function table()
    {
        return self::callParent(__FUNCTION__, func_get_args());
    }
}