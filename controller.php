<?php

    include_once "model.php";
    include_once "view.php";

    
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
            $oglasi=$this->model->dohvatiSveOglase()->fetchAll(PDO::FETCH_ASSOC);
            $this->view->prikaziOglase($oglasi);
        }

        public function dodajOglas($naslov, $sadrzaj, $cijena, $kontakt, $korisnicko_ime)
        {
            $this->model->naslov=$naslov;
            $this->model->sadrzaj=$sadrzaj;
            $this->model->cijena=$cijena;
            $this->model->kontakt=$kontakt;
            $this->model->korisnicko_ime=$korisnicko_ime;
            $this->model->dodajOglas();
        }

    }

?>