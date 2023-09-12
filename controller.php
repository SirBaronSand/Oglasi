<?php

    include_once "model.php";
    include_once "view.php";
    include_once "config.php";


    
    class OglasController
    {
        private $model;
        private $view;

        public function __construct($model, $view)
        {
            $this->model=$model;
            $this->view=$view;
        }

        public function prikaziSveOglase()
        {
            $oglase=$this->model->dohvatiOglase()->fetchAll(PDO::FETCH_ASSOC);
            $this->view->prikaziOglase($oglase);
        }

        public function dodajOglas($naslov, $oglas, $cijena, $kontakt, $korisnicko_ime)
        {
            $this->model->naslov=$naslov;
            $this->model->oglas=$oglas;
            $this->model->cijena=$cijena;
            $this->model->kontakt=$kontakt;
            $this->model->korisnicko_ime=$korisnicko_ime;
            $this->model->dodajOglas();
        }

    }

?>