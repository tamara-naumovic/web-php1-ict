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
        
        <div class="okvir-store">
            <div class="row row-2">
                <h2>All products</h2>
                <select name="" id="">
                    <option value="">Default</option>
                    <option value="">Sort by name</option>
                    <option value="">Sort by price</option>
                </select>
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