<?php
trait Logger{
   public  $name = "Logger";
    public function log($message){
        echo $message."<br>";
    }
}

class Post{
    use Logger;
    public function store(){
        echo $this->name."<br>";
        $this-> log("Post created"); 
    }
}
class Comment{
    use Logger;
    public function store(){
        $this-> log("Comment created"); 
    }
}

$post = new Post();
$post->store();

$comment = new Comment();
$comment->store();