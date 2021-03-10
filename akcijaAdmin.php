<?php
include("control/Controler.php");
$ctrl = Controler::getInstance();
if(isset($_POST["btnDeleteAk"])){
    $ctrl->deleteAkcija($_POST["akcijaIzbor"]);
}
if(isset($_POST["btnInsertAk"])){
    $naziv = "'".$_POST["nazivAk"]."'";
    $opis ="'".$_POST["opisAk"]."'";
    $popust = floatval($_POST["popustAk"]);
    $start = "'".$_POST["akcija-start"]."'";
    $end = "'".$_POST["akcija-end"]."'";
    $niz = array($naziv, $opis, $popust, $start, $end);
    $akcija = $ctrl->insertAkcija($niz);
}
if(isset($_POST["btnUpdateAk"])){
    $id = $_POST["akcijaIzbor"];
    $naziv = "'".$_POST["nazivAk"]."'";
    $opis ="'".$_POST["opisAk"]."'";
    $popust = floatval($_POST["popustAk"]);
    $start = "'".$_POST["akcija-start"]."'";
    $end = "'".$_POST["akcija-end"]."'";
    $niz = array($naziv, $opis, $popust, $start, $end);
    print_r($niz);
    $akcija = $ctrl->updateAkcija($id, ["naziv","opis", "popust", "datum_od", "datum_do"], $niz);
}
header('Location: admin.php');
?>