<?php
//Autoload Classes for two steps hierarchy files
spl_autoload_register(function($class){
    if(file_exists("classes/".$class.".class.php")){
        include "classes/".$class.".class.php"; //first hierarchy
    }
    else{
        if(file_exists("../classes/".$class.".class.php")){
            include "../classes/".$class.".class.php";//second hierarchy
        }else{
            include "../../classes/".$class.".class.php";//second hierarchy
        } 
    }
   
    
});