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
                        <img src="images/logo.jpg" alt="" id="productImg"/>
                        <div class="small-img-row">
                            <div class="small-img-col alt">
                                <img src="images/razer1.jpg" alt="" class="small-img"/>
                            </div>
                            <div class="small-img-col">
                                <img src="images/razer2.jpg" alt="" class="small-img"/>
                            </div>
                            <div class="small-img-col">
                                <img src="images/razer3.jpg" alt="" class="small-img"/>
                            </div>
                            <div class="small-img-col">
                                <img src="images/razer1.jpg" alt="" class="small-img"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 right">
                        <h1>NAZIV PROIZVODA</h1>
                        <p>KATEGORIJA</p>
                        <h4>CENA</h4>
                        <input type="button" name="btnAdd" id="btnAdd" value="Add to Cart"/>
                        <h3>OPIS PROIZVODA</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio qui eveniet officia animi harum cupiditate ipsum ducimus sit, molestias assumenda illum. Quaerat dolore suscipit, optio deserunt nobis earum explicabo!</p>
                    </div>
                </div>
            </div>

            <div class="small-container">
                <div class="row row-2">
                    <h2>Related Products</h2>
                </div>
                <a href="#" class="viewmore">View More</a>
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

        <?php include("footer.php"); ?>
    </div>

    
    <script type="text/javascript" src="js/meni.js"></script>
    <script type="text/javascript">
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");

        smallImg[0].onclick = function(){
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            productImg.src = smallImg[3].src;
        }

    </script>

</body>
</html>