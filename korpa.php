<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
}elseif(!isset($_SESSION['loggeduser'])){
    header('Location: index.php');
    exit();
}
include("control/Controler.php");
$ctrl = Controler::getInstance();
$proizvodi = [];
if(isset($_SESSION['korpa'])):
    foreach($_SESSION['korpa'] as $id){
        $pr = $ctrl->getProizvodFiler(" id=".$id)->fetch_object();
        
        $proizvodi[]=$pr;
    }
    $suma = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Korpa</title>
    <style>
        td img{
            max-width: 100px;
        }
    </style>
</head>
<body>
<? include("header.php"); ?>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($proizvodi as $p): 
                    $slika = $ctrl->getSlikaSingle($p->slika_id)->fetch_object();
                    $suma+=$p->cena
            ?>
            <tr>
                
                <td><img src="<?php echo $slika->url;?>" alt="<?php echo $slika->naziv;?>"></td>
                <td><?php echo $p->naziv;?></td>
                <td><?php echo $p->cena;?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"> Ukupno</td>
                <td > <?php echo $suma;?></td>
            </tr>
        </tfoot>
    </table>
    <?php $_SESSION['korpa-ukupno'] =$suma ;?>
    <form action="naruci.php" method="post">
        <input type="submit" name="naruciKorma" value="Naruči">
    </form>
    <div class="cistac"></div>
    <? include("footer.php"); ?>
    <script src="meni.js" type="text/javascript"></script>
</body>
</html>
<?php else:?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Korpa</title>
    </head>
    <body>
        <? include("header.php"); ?>
        <p>Nema proizvoda u korpi</p>
        <div class="cistac"></div>
        <? include("footer.php"); ?>
        <script type="text/javascript" src="js/meni.js"></script>
    </body>
    </html>
<?php endif;?>