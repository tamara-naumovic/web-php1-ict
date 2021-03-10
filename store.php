<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Store</title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="okvir">
        <?php include("header.php"); ?>
        <div id="store-okvir">
            <div class="col col-left">
                <div class="left-sidebar">
                    <h2>Categories</h2>
                    <div class="kategorije">
                        <div class="kat kat_1">
                            <h3>
								<a href="#store">
									Mouse
								</a>
							</h3>
                        </div>
                        <div class="kat kat_2">
                            <h3>
								<a href="#store">
									Keyboard
								</a>
							</h3>
                        </div>
                        <div class="kat kat_3">
                            <h3>
								<a href="#store">
									Headphone
								</a>
							</h3>
                        </div>
                        <div class="kat kat_4">
                            <h3>
								<a href="#store">
									Monitor
								</a>
							</h3>
                        </div>
                    </div>
                    <h2>Brands</h2>
                    <div class="brendovi">
                        <div class="brand-name">
                            <ul>
                                <li><a href="#">Razer<span class="desno">10</span></li></a>
                                <li><a href="#">SteelSeries<span class="desno">15</span></li></a>
                                <li><a href="#">Asus<span class="desno">20</span></li></a>
                                <li><a href="#">Dell<span class="desno">25</span></li></a>
                            </ul>
                        </div>
                    </div>
                    <h2>Sorting</h2>
                    <div class="sort">
                        <div class="chb"><input type="checkbox" name="" id=""/><span>Sort by price</span></div>
                        <div class="chb"><input type="checkbox" name="" id=""/><span>Sort by name</span></div>
                        <div class="chb"><input type="checkbox" name="" id=""/><span>Sort by quantity</span></div>
                    </div>
                </div>
            </div>
            <div class="col col-right">
                <div class="small-container">
                <h2>Products</h2>
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
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>

        <script type="text/javascript" src="js/meni.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </div>
</body>
</html>