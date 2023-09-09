<?php
namespace App\Controllers;
use App\Models\User;
class LoginController {
    public function index()
    {
      //  $user = new User();
       
      //  $data = $user->fetchData('select * from users where id =16');
      //  echo "<pre>";
      //  print_r($data);
      //  exit();
        view('login');
    }

    public function login(){
        $error="";
 $user = new User();
 $user->email = $_POST['email'];
 $user->password = $_POST['password'];
if($user-> login()){
  $_SESSION['user_id'] = $user->id; 
  $_SESSION['user_name'] = $user->name; 
        redirect('/dashboard');


  
  exit();
}else{
  $error ='unable to logged in ';
  
}
    }
}