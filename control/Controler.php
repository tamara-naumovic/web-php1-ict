<?php 
include ("db/Database.php");


class Controler{
    private $mydb;
    private static $instance = null;
    
    function __construct()
    {
        $this->mydb = new Database("acabaaz2");
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new Controler();
        }
    
        return self::$instance;
    }
    // proizvodi
    public function getProizvod(){
        $this->mydb->select("proizvod","*",null,null,null,null,null);
        return $this->mydb->getResult();
    }
    public function getProizvodFiler($filter){
        $this->mydb->select("proizvod","*",null,null,null,$filter,null);
        return $this->mydb->getResult();
    }
    public function insertProizvod($values){
        $this->mydb->insert("proizvod","naziv,kategorija_id, cena, proizvodjac, kvantitet, slika_id",$values);
        return $this->mydb->getResult();

    }
    public function deleteProizvod($id){
        $this->mydb->delete("proizvod", "ID",$id);
        return $this->mydb->getResult();

    }
    public function updateProizvod($id,$keys, $values)
    {
        $this->mydb->update("proizvod","id",$id, $keys,$values);
        
        return $this->mydb->getResult();

    }

    //akcije

    public function getAkcija(){
        $this->mydb->select("akcija","*", null, null, null, null, null);
        return $this->mydb->getResult();
    }
    public function getAkcijaFilter($filter){
        $this->mydb->select("akcija","*", null, null, null, $filter, null);
        return $this->mydb->getResult();
    }

    public function insertAkcija($values){
        $this->mydb->insert("akcija","naziv,opis, popust, datum_od, datum_do",$values);
        return $this->mydb->getResult();

    }

    public function updateAkcija($id,$keys, $values)
    {
        $this->mydb->update("akcija","id",$id, $keys,$values);
        
        return $this->mydb->getResult();

    }

    public function deleteAkcija($id){
        $this->mydb->delete("akcija", "id",$id);
        return $this->mydb->getResult();

    }

    //proizvodi na akciji
    public function getProizvodiNaAkciji($akcija){
        $this->mydb->select("proizvodi_na_akciji","*", null, null, null, " akcija_id=$akcija", null);
        return $this->mydb->getResult();
    }

    public function insertProizvodNaAkciji($values){
        $this->mydb->insert("proizvodi_na_akciji","akcija_id,proizvod_id",$values);
        return $this->mydb->getResult();

    }


    // kategorije

    public function getKategorija(){
        $this->mydb->select("kategorija","*", null, null, null, null, null);
        return $this->mydb->getResult();
    }
    // public function getPoslednjaKategorija(){
    //     $this->mydb->select("kategorija","*", null, null, null, null, " id DESC LIMIT 1");
    //     return $this->mydb->getResult();

    // }

    // korisnici


    public function getKorisnik($email, $sifra){
        $this->mydb->select("korisnik","*", null, null, null, " email='$email' AND sifra='$sifra'" , null);
        return $this->mydb->getResult();

    }
    public function insertKorisnik($values){
        $values[]=2;
        $this->mydb->insert("korisnik","ime,prezime, email, sifra, adresa, uloga_id",$values);
        return $this->mydb->getResult();

    }

    // meni

    public function getMeniStandard(){
        $where = ' naziv_linka IN ("Home", "About","Login","Store")';
        $this->mydb->select("meni","*", null, null, null, $where, null);
        return $this->mydb->getResult();
    }
    public function getMeniUser(){
        $where = ' naziv_linka IN ("Home", "About","Contact","Store", "Logout","Korpa")';
        $this->mydb->select("meni","*", null, null, null, $where, null);
        return $this->mydb->getResult();
    }
    public function getMeniAdmin(){
        $where = ' naziv_linka IN ("Admin", "Logout")';
        $this->mydb->select("meni","*", null, null, null, $where , null);
        return $this->mydb->getResult();
    }
  



     // slika

     public function getSlika(){
        $this->mydb->select("slika","*", null, null, null, null, null);
        return $this->mydb->getResult();
    }

    public function getPoslednjaSlikaID(){
        $this->mydb->select("slika","id", null, null, null, null, " id DESC LIMIT 1");
        return $this->mydb->getResult();

    }

    public function insertSlika($values){
        $this->mydb->insert("slika","url,naziv",$values);
        return $this->mydb->getResult();

    }

    // uloga
        public function getUloga(){
        $this->mydb->select("uloga","*", null, null, null, null, null);
        return $this->mydb->getResult();
    }


    // poruke


    public function getPoruka(){
        $this->mydb->select("poruka","*", null, null, null, null, null);
        return $this->mydb->getResult();

    }
    public function insertPoruka($values){
        $values[]="NOW()";
        $this->mydb->insert("poruka","korisnik_id, sadrzaj, timestamp",$values);
        return $this->mydb->getResult();

    }

    // narudzbine

    public function insertStavka($values){
        $narudzbine = $this->getNaruzbina();
        $narudzbina_id = $narudzbine->fetch_object()->id;
        $values[]=$narudzbina_id;
        $this->mydb->insert("stavka","proizvod_id,narudzbina_id",$values);
        return $this->mydb->getResult();
    }

    public function getNaruzbina(){
        $this->mydb->select("narudzbina","*", null, null, null, null, " id DESC LIMIT 1");
        return $this->mydb->getResult();

    }


    public function insertNaruzbina($values,$stavke){
        $values[]="NOW()";
        $this->mydb->insert("narudzbina","korisnik_id, ukupna_cena, datum",$values);
        
        foreach ($stavke as $stavka) {
            $this->insertStavka($stavka);
        }
        return $this->mydb->getResult();

    }


}
    
?>