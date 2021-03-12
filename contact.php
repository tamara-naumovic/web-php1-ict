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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact </title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="okvir">
        <?php include("header.php"); ?>
        <div id="cnt-okvir">
            <div class="forma contact">
                <div class="title">
                    Contact
                </div>
                <form action="" id="formCnt" class="form" method="post">
                    <div class="form-control">
                        <label>Message</label>
                        <textarea name="message" id="textareaCnt" placeholder="Message"></textarea>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <input type="submit" name="btnCnt" id="btnCnt" value="Send"/>
                </form>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>
    </div>
    <script type="text/javascript" src="js/validacijaCnt.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/meni.js"></script>
</body>
</html>