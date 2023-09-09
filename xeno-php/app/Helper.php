<?php
function redirect($url)
{
    header("Location: $url");
    exit();
}

function view($file_path,$data=[]){
    $path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path) ;
    $path = str_replace('.',DIRECTORY_SEPARATOR,$path);
    $file = APP_ROOT.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.$path.'.php';
   if(file_exists($file)){
    extract($data);
    return require $file;
   }
   throw new Exception('page not found'.$file);
}

function includes($file_path){
include(APP_ROOT.'pages/'.$file_path);
}