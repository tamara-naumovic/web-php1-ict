<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
} elseif (!isset($_SESSION['loggeduser'])) {
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
    <title>Korpa</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        #table-okvir {
            display: flex;
            flex-direction: column;
            min-height: 500px;
            justify-content: center;
            align-items: center;
            font-size: 150%;
        }
        a{
            color: black;
        }

    </style>
</head>

<body>
    <div class="okvir">
        <?php include("header.php"); ?>
        <div id="table-okvir">
            <p>Korpa je prazna</p>
            <a href="store.php">Vrati se nazad u prodavnicu</a>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>
    </div>

    <script type="text/javascript" src="js/meni.js"></script>

</body>

</html>