<?php
namespace App\Controllers;
class DashboardController {
    public function index()
    {
        $posts=[
            ['id'=>1,'title'=>'Post title','content'=>'Post Content'],
            ['id'=>2,'title'=>'Post title','content'=>'Post Content'],
            ['id'=>3,'title'=>'Post title','content'=>'Post Content']
        ];
        view('dashboard',['user_posts'=>$posts]);
    }
      public function logout()
    {
        
        $_SESSION = [];
        session_destroy();
     redirect('/login');
        exit();
    }
}