<?php

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
                echo "<h1>{$oglas['naslov']}</h1>";
                echo "<p>{$oglas['sadrzaj']}</p>";
                echo "<p>{$oglas['cijena']}</p>";
                echo "<p>{$oglas['kontakt']}</p>";
                echo "<p>{$oglas['korisnicko_ime']}</p>";
            }
        }
    }

?>