<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
}elseif(!isset($_SESSION['loggeduser'])){
    header('Location: index.php');
    exit();
}
?>