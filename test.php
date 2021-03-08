<?php

include("control/Controler.php");
$ctrl = Controler::getInstance();

// $kategorije = $ctrl->getPoslednjaKategorija();
// // $proizvodi = $ctrl->updateProizvod(1,["cena", "naziv"], [60,"'novi test'"]);
// $korisnik = $ctrl->getKorisnik("tamara@elab.rs","sifra");
// // $row = $kategorije->fetch_object()
// $row = $kategorije->fetch_object();
// echo $row->ID;
// endwhile;
// $ctrl->insertKorisnik(["'Pera'","'Peric'","'mejl1'","'sifra1'","'maksima'","NULL"]);
$stavke= array(
    [1],
    [2],
    [1]
);
$ctrl->insertNaruzbina([4,500],$stavke);
?>