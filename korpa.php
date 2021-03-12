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
    <title>Korpa</title>
    <style>
        td img{
            max-width: 100px;
        }
    </style>
</head>
<body>

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
</body>
</html>
<?php else:?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Korpa</title>
    </head>
    <body>
        <p>Nema proizvoda u korpi</p>
    </body>
    </html>
<?php endif;?>