<?php
require_once '../database/connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM `todo-list2`.`user` WHERE username = :username AND password = :password");
    
    $stmt->bindvalue(':username', $username);
    $stmt->bindvalue(':password', $password);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO:: FETCH_ASSOC);

    if(count($result) > 0){
        session_start();
        $_SESSION['username']=&$username;
        header("Location:../view/dashboard.php");
        exit;
    }
    else{
        header("Location:login.php?error=Invalid username or password");
        exit;
    }

}
?>