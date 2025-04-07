<?php

namespace App\Core;

class Helper{
   public static function dd($value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
    
    public static function asset($path) {
        return '/' . ltrim($path, '/');
    } 
}


