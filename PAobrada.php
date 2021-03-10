<?php
include("control/Controler.php");
$ctrl = Controler::getInstance();
if(isset($_POST["btnInsertAKP"])){
    $akcija =intval( $_POST["PAAkcija"]);
    $proiz =intval( $_POST["PAProizvod"]);

    $niz = array($akcija, $proiz);
    print_r($niz);

    $akcijaproiz = $ctrl->insertProizvodNaAkciji($niz);
    print_r($akcijaproiz);
}

header('Location: admin.php');
?>