<?php
 // cijena ne radi dobro trebalo bi biti samo decimalni broj bez simbola
    class OglasView
    {
        public function prikaziFormu()
        {
            echo '
            <head>
  <title>Credit Card Validation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 95%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      background-color: #4CAF50;
      color: #ffffff;
      font-size: 16px;
      text-align: center;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error {
      color: red;
      font-size: 14px;
    }
  </style>
            
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
                echo "Cijena: <br><p>{$oglas['cijena']} €</p>";
                echo "Kontakt: <br><p>{$oglas['kontakt']}</p>";
                echo "Korisnik: <br><p>{$oglas['korisnicko_ime']}</p>";
            }
        }
    }

?>