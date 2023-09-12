<?php

    class OglasView
    {
        public function prikaziFormu()
        {
            echo '
            
                <form method="post" action="index.php">
                    <input type="text" name="naslov">
                    <textarea name="oglas"></textarea>
                    <input type="number" name="cijena">
                    <input type="text" name="kontakt">
                    <input type="text" name="korisnicko_ime">
                    <input type="submit" value="OBJAVI OGLAS">
                </form>

            ';
        }

        public function prikaziOglas($oglasi)
        {
            foreach($oglasi as $oglas)
            {
                echo "<h1>{$oglas['naslov']}</h1>";
                echo "<p>{$oglas['oglas']}</p>";
                echo "<p>{$oglas['cijena']}</p>";
                echo "<p>{$oglas['kontakt']}</p>";
                echo "<p>{$oglas['korisnicko_ime']}</p>";
            }
        }
    }

?>