<?php
include("control/Controler.php");
$ctrl = Controler::getInstance();
if(isset($_POST["btnDeleteProiz"])){
    $ctrl->deleteProizvod($_POST["proizvodiIzbor"]);
}if(isset($_POST["btnInsertProiz"])){
    $imeProiz = "'".$_POST["nazivProd"]."'";
    $kategorija =intval( $_POST["kategorijaIzbor"]);
    $cena = floatval($_POST["cenaProd"]);
    $proizvodjac = "'".$_POST["proizvodjacProd"]."'";
    $kvantitet = intval($_POST["kvantitetProd"]);
    $slika = intval($_POST["slikaIzbor"]);
    $niz = array($imeProiz, $kategorija, $cena, $proizvodjac, $kvantitet, $slika);
    $proizvod = $ctrl->insertProizvod($niz);
}
if(isset($_POST["btnUpdateProiz"])){
    $id = $_POST["proizvodiIzbor"];
    $imeProiz = "'".$_POST["nazivProd"]."'";
    $kategorija =intval( $_POST["kategorijaIzbor"]);
    $cena = floatval($_POST["cenaProd"]);
    $proizvodjac = "'".$_POST["proizvodjacProd"]."'";
    $kvantitet = intval($_POST["kvantitetProd"]);
    $slika = intval($_POST["slikaIzbor"]);
    $niz = array($imeProiz, $kategorija, $cena, $proizvodjac, $kvantitet, $slika);
    
    $proizvod = $ctrl->updateProizvod($id, ["naziv","kategorija_id", "cena", "proizvodjac", "kvantitet", "slika_id"],$niz);
}
header('Location: admin.php');
?>