<?php
 // cijena ne radi dobro trebalo bi biti samo decimalni broj bez simbola
    class OglasView
    {
        public function prikaziFormu()
        {
            echo '
            
                <form method="post" action="index.php">
                    Naslov: <br>
                    <input type="text" name="naslov">
                    <br> Oglas: <br>
                    <textarea name="sadrzaj"></textarea>
                    <br> Cijena: <br>
                    <input type="text" name="cijena">
                    <br> Kontakt: <br>
                    <input type="text" name="kontakt">
                    <br> Korisnicko ime: <br>
                    <input type="text" name="korisnicko_ime">
                    <br>
                    <input type="submit" value="OBJAVI OGLAS">
                </form>

            ';
        }

        public function prikaziOglase($oglasi)
        {
            foreach($oglasi as $oglas)
            {
                echo "Naslov: <br><h1>{$oglas['naslov']}</h1>";
                echo "Opis: <br><p>{$oglas['sadrzaj']}</p>";
                echo "Cijena: <br><p>{$oglas['cijena']}</p>€";
                echo "Kontakt: <br><p>{$oglas['kontakt']}</p>";
                echo "Korisnik: <br><p>{$oglas['korisnicko_ime']}</p>";
            }
        }
    }

?>