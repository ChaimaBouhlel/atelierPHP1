<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email)&& isset($password)){
    if ($email=='chaima@cb.cb' && $password=='qsdf'){
        $_SESSION['user']="chaima";
        header('location:home.php');
    }else{
        $_SESSION['errorMessage']="Verifiez vos credentials";
        header('location:login.php');
    }
}else{

}
?>

