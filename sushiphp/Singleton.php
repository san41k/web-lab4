<?php


class Singleton
{
    private static $variable = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getVar()
    {
        if (self::$variable === null) {
            return self::$variable = new self();
        } else
            return self::$variable;
    }

    public function printTest()
    {
        return "<br>Yes<br>";
    }
}


?>
