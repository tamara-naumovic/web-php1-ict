<?php
    session_start();

if(!isset($_POST['submitKorpa'])){
    header('Location: store.php');
}else{
    if(!isset($_SESSION['korpa'])){
        $_SESSION['korpa'] = array();
    }
    $_SESSION['korpa'][] = $_POST['proizvodKorpaId'];
    header('Location: store.php');
    
}
?>