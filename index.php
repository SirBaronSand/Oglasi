<?php
//5 indeks datoteka gdje se spaja na bazu koristeci postojece klase

include_once "config.php";
include_once "model.php";
include_once "view.php";
include_once "controller.php";

$database=new Database($host, $db_name, $username, $password);
$db=$database->connect();

$view=new OglasView();
$model=new Oglas($db); //stogod imamo u constructoru moramo proslijediti
// $controller=new OglasController($model, $view);

$view->prikaziFormu();
if($_POST)
{
    $naslov=$_POST["naslov"];
    $oglas=$_POST["oglas"];
    $cijena=$_POST["cijena"];
    $kontakt=$_POST["kontakt"];
    $korisnicko_ime=$_POST["korisnicko_ime"];
    $controller->dodajOglas($naslov, $oglas, $cijena, $kontakt, $korisnicko_ime);
}

$controller->prikaziOglase();




?>

