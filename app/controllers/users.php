<?php 
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUsers.php");
error_reporting(0);

$errors = array();
$username = '';
$email = '';
$password = '';
$table = 'users';

function loginUser($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['admin'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }
    else {
        header('location: '. BASE_URL . '/index.php');
    }
    exit();
}

//  if(isset($_POST['login-btn'])){
//      unset($_POST['login-btn'], $_POST['passwordConf']);
//      $_POST['admin'] = 1;
//      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
//      $user_id = create('users',$_POST);
//      $user = selectOne('users',['id' => $user_id]);
//      dd($user);
//  }

  if(isset($_POST['login-btn'])){
      $errors = validateLogin($_POST);
      if (count($errors) === 0) {
          $user = selectOne($table,['username' => $_POST['username']]);
          if($user && password_verify($_POST['password'], $user['password'])) {
             loginUser($user); 
          }
          else {
              array_push($errors, 'Wrong credentials');
          }
      
      $username = $_POST['username'];
      $password = $_POST['password'];
    }
  }
?>