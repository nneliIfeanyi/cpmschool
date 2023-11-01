<?php
  // Simple page redirect
  function redirect($page){
    header('location: '.URLROOT.'/'.$page);
  }

  // Create Session With User Info
  function createUserSession($user){
    $_SESSION['user_id'] = $user->id; 
    $_SESSION['user_name'] = $user->name;
    redirect('admin');
  }


  // Check Logged In
  function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }