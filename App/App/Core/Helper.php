<?php

namespace App\Core;

class Helper{
   public static function dd($value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
        die();
    }
    
    public static function asset($path) {
        return '/' . ltrim($path, '/');
    } 

    public static function basePath($path){
        return __DIR__ . "/../$path";
    }

    public static function error($errorCode){
        http_response_code($errorCode);
        $path = self::basePath('/../App/Controllers/error.php');
        // self::dd($path);
        include $path;
        exit;
    }

    public static function view($viewPath, $data = []){
        extract($data);
        $path = self::basePath("/../resources/views/$viewPath.view.php");
        // self::dd($path);
        require $path;
        exit;
    }
}


