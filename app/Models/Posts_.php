<?php

namespace App\Models;



class Posts 
{
    static $data_sayur = "Sayur sangat sehat";
    static $data_buah = "4 sehat 5 sempurna";

    public static function buah()
    {
        return self::$data_buah;
    }

    public static function sayur()
    {
        return self::$data_sayur;
    }
}
