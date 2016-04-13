<?php


//include the config file
include("config.php");

/*Directories that contain classes*/
$classesDir = array (
    ROOT_DIR.'libs/'
);
function __autoload($class_name) {
    global $classesDir;
    foreach ($classesDir as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once ($directory . $class_name . '.php');
            return;
        }
    }
}


$db = Database::get();