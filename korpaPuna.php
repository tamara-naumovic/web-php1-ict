<?php
session_start();
if (isset($_SESSION['loggeduser']) && $_SESSION['loggeduser'][1] == "1") {
    header('Location: admin.php');
    exit();
} elseif (!isset($_SESSION['loggeduser'])) {
    header('Location: index.php');
    exit();
}
include("control/Controler.php");
$ctrl = Controler::getInstance();
$proizvodi = [];
foreach ($_SESSION['korpa'] as $id) {
    $pr = $ctrl->getProizvodFiler(" id=" . $id)->fetch_object();

    $proizvodi[] = $pr;
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
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/korpaPuna.css" type="text/css">

</head>

<body>
    <div class="okvir">
        <?php include("header.php"); ?>
        <div id="table-okvir">

            <table id="korpaProizvodi">
                <thead>
                    <tr>
                        <th></th>
                        <th>Naziv</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($proizvodi as $p) :
                        $slika = $ctrl->getSlikaSingle($p->slika_id)->fetch_object();
                        $suma += $p->cena
                    ?>
                        <tr>

                            <td id="celijaSlika"><img src="<?php echo $slika->url; ?>" alt="<?php echo $slika->naziv; ?>"></td>
                            <td><?php echo $p->naziv; ?></td>
                            <td><?php echo $p->cena; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" id="korpaUkupno"> Ukupno: </td>
                        <td> <?php echo $suma; ?>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> </td>
                        <td>
                            <?php $_SESSION['korpa-ukupno'] = $suma; ?>
                            <form action="naruci.php" method="post" id="naruciKorpa">
                                <input type="submit" name="naruciKorma" id="korpaDugme" value="Naruči">
                            </form>
                        </td>
                    </tr>
                </tfoot>
            </table>


        </div>

        <div class="cistac"></div>

        <?php include("footer.php"); ?>
    </div>

    <script type="text/javascript" src="js/meni.js"></script>

</body>

</html>