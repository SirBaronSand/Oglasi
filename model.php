<?php

    include_once "Database.php";

    class Oglas
    {
        private $conn;
        private $table="oglasi";
        
        public $id_oglas;
        public $naslov;
        public $sadrzaj;
        public $cijena;
        public $kontakt;
        public $korisnicko_ime;
        public function __construct($db)
        {
            $this->conn=$db;
        }

        public function dohvatiSveOglase()
        {
            $query="SELECT * FROM ".$this->table;
            $stmt=$this->conn->prepare($query); 
            $stmt->execute();
            return $stmt;
        }

        public function dodajOglas()
        {
            $query="INSERT INTO ".$this->table." (naslov, oglas, cijena, kontakt, korisnicko_ime) VALUES (:naslov, :oglas, :cijena, :kontakt, :korisnicko_ime)";
            $stmt=$this->conn->prepare($query);
            $this->naslov=htmlspecialchars(strip_tags($this->naslov));
            $this->sadrzaj=htmlspecialchars(strip_tags($this->sadrzaj));

            $stmt->bindParam(":naslov",$this->naslov);
            $stmt->bindParam(":oglas",$this->sadrzaj);
            $stmt->bindParam(":cijena",$this->cijena);
            $stmt->bindParam(":kontakt",$this->kontakt);
            $stmt->bindParam(":korisnicko_ime",$this->korisnicko_ime);

            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>