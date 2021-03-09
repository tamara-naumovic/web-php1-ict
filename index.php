<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingStore</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <!--<div class="col-3">
                            <a href="store.php"><img src="images/mouse_kat.jpg" alt="mis"/></a>
                        </div>
                        <div class="col-3">
                            <a href="store.php"><img src="images/keyboard_kat.jpg" alt="tastatura"/></a>
                        </div>
                        <div class="col-3">
                            <a href="store.php"><img src="images/headphones_kat.jpg" alt="slusalice"/></a>
                        </div>
                        <div class="col-3">
                            <a href="store.php"><img src="images/monitor_kat.jpg" alt="monitor"/></a>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="small-container">
                <h2>Featured Products</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                    </div>
                </div>

                <h2>Latest Products</h2>
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star-half"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo"/>
                        <h4>Naziv proizvoda</h4>
                        <div class="raiting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Cena</p>
                        <a href="#">Dodaj u korpu</a>
                    </div>
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