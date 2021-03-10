<?php

include("control/Controler.php");
$ctrl = Controler::getInstance();

$slika = $ctrl->getPoslednjaSlikaID();

$row=$slika->fetch_object();
print_r($row->id);
//     $pom = array("href"=>$row->link,"textLink"=>$row->naziv_linka);
//     $meni_array[]=$pom;
// endwhile;
// print_r(json_encode($meni_array));
// // $proizvodi = $ctrl->updateProizvod(1,["cena", "naziv"], [60,"'novi test'"]);
// $korisnik = $ctrl->getKorisnik("tamara@elab.rs","sifra");
// // $row = $kategorije->fetch_object()
// $row = $kategorije->fetch_object();
// echo $row->ID;

// $ctrl->insertKorisnik(["'Pera'","'Peric'","'mejl1'","'sifra1'","'maksima'","NULL"]);
// $stavke= array(
//     [1],
//     [2],
//     [1]
// );
// $ctrl->insertNaruzbina([4,500],$stavke);
?>