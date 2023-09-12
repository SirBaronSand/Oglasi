<?php

    include_once "config.php";

    class Oglas
    {
        private $conn;
        private $table="oglasi";
        
        public $id_oglas;
        public $naslov;
        public $oglas;
        public $cijena;
        public $kontakt;
        public $korisnicko_ime;
        public function __construct($db)
        {
            $this->conn=$db;
        }

        public function dohvatiOglase()
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
            $this->oglas=htmlspecialchars(strip_tags($this->oglas));

            $stmt->bindParam(":naslov",$this->naslov);
            $stmt->bindParam(":oglas",$this->oglas);
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