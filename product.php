<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
}
include("control/Controler.php");
$ctrl = Controler::getInstance();
$proizvod = [];
$kategorija = [];
$slika = [];
if (!isset($_GET['id'])) {
    header('Location: store.php');
} else {
    $proizvod = $ctrl->getProizvodFiler(" id=" . $_GET['id'])->fetch_object();
    $kategorija =  $ctrl->getKategorijaSingle($proizvod->kategorija_id)->fetch_object();
    $slika =  $ctrl->getSlikaSingle($proizvod->slika_id)->fetch_object();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="okvir">
        <?php include("header.php"); ?>

        <div id="product-okvir">
            <div class="small-container single-product">
                <div class="row-gore">
                    <div class="col-2 main">
                        <img src="<?php echo $slika->url ?>" alt="" id="<?php echo $slika->naziv ?>" />

                    </div>
                    <div class="col-2 right">
                        <h1><?php echo $proizvod->naziv ?></h1>
                        <p><?php echo $kategorija->naziv ?></p>
                        <h4><?php echo $proizvod->cena ?></h4>
                        <form action="dodajUkorpu.php" method="post">
                            <input type="hidden" name="proizvodKorpaId" value="<?php echo $proizvod->ID; ?>">
                            <input type="submit" name="submitKorpa" value="Dodaj u korpu">
                        </form>
                        <h3>Kvantitet</h3>
                        <p><?php echo $proizvod->kvantitet ?></p>
                        <h3>Proizvodjac</h3>
                        <p><?php echo $proizvod->proizvodjac ?></p>
                    </div>
                </div>
            </div>


        </div>

        <?php include("footer.php"); ?>
    </div>


    <script type="text/javascript" src="js/meni.js"></script>
    <script type="text/javascript">
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");

        smallImg[0].onclick = function() {
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function() {
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function() {
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function() {
            productImg.src = smallImg[3].src;
        }
    </script>

</body>

</html>