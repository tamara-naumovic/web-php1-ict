<?php
session_start();

if(!isset($_POST['naruciKorma'])){
    header('Location: store.php');
    exit();
}else{

include("control/Controler.php");
$ctrl = Controler::getInstance();
$korisnik = $_SESSION['loggeduser'][2];
$ukupno = $_SESSION['korpa-ukupno'];
$proizvodi =$_SESSION['korpa'];

$naruzbina = $ctrl->insertNaruzbina([$korisnik,$ukupno],$proizvodi);
unset($_SESSION['korpa-ukupno']);
unset($_SESSION['korpa']);

header('Location: store.php');

}
?>