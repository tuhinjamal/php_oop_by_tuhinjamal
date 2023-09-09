<?php

class FileWrite{
    private $resource;
    public function __construct(){
        $this->resource = fopen('example.txt','w');
    }
    public function write($text){
        fwrite($this->resource, $text);
    }

    public function __destruct(){
        fclose($this->resource);
    }
}
    $obj = new FileWrite();
$obj->write("hello world by tuhin jamal");