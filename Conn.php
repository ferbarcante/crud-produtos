<?php
namespace App\model;
class Connn {
    //ṕadrão singleton
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        else:
            return self::$instance;
        endif;
    }
}