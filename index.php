<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
}
include("control/Controler.php");
$ctrl = Controler::getInstance();
$proizvodi = $ctrl->getProizvod();
$proizvodi2 = $ctrl->getProizvod();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStore</title>
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

</head>

<body>
    <div class="okvir">
        <?php include("header.php"); ?>

        <div id="slider-container">
            <div class="slider">
                <div class="slides">
                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="categories">
                <div class="small-container">
                <h2>Categories</h2>
                    <div class="row" id="kategorije">
                        
                    </div>
                </div>
            </div>

            <div class="small-container">
                <h2>Featured Products</h2>
                <div class="row">
                <?php
                    $nizFeatured = array();
                    while($row=$proizvodi->fetch_object()):
                        $nizFeatured[]=$row;
                    endwhile;
                    $nizFeaturedIndex = array_rand($nizFeatured, 4);
                    
                    foreach ($nizFeaturedIndex as $nfindex):
                        $featiredProizvod = $nizFeatured[$nfindex];
                        $slika = $ctrl->getSlikaSingle($featiredProizvod->slika_id)->fetch_object();

                ?>
                    <div class="col-4">
                        <a href="store.php"> <img src="<?php echo $slika->url ?>" alt="<?php echo $slika->naziv ?>"/></a>
                    </div>
                <?php endforeach;?>
                </div>

                <h2>Latest Products</h2>
                <div class="row">
                <?php
                    $nizLatest = array();
                    while($row=$proizvodi2->fetch_object()):
                        $nizLatest[]=$row;
                    endwhile;
                    $nizLatestIndex = array_rand($nizLatest, 8);
                    
                    foreach ($nizLatestIndex as $nlindex):
                        $latestProizvod = $nizLatest[$nlindex];
                        $slika = $ctrl->getSlikaSingle($latestProizvod->slika_id)->fetch_object();   
                ?>
                    <div class="col-4">
                        <img src="<?php echo $slika->url ?>" alt="<?php echo $slika->naziv ?>"/>
                        <h4><?php echo $latestProizvod->naziv;?></h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half"></i>
                        </div>
                        <p><?php echo $latestProizvod->cena;?></p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                <?php endforeach;?>
                </div>

            </div>

        </div>

        <div class="cistac"></div>
        <?php include("footer.php"); ?>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/meni.js"></script>

    </div>
</body>

</html>