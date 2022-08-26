<?php


class Singleton
{
    private static $variable = null;

    private function __construct()
    {
    }

    public static function getVar()
    {
        if (self::$variable === null) {
            return self::$variable = new self();
        } else
            return self::$variable;
    }
}


?>
