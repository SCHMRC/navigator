<?php 
    class Azienda{
        private $piva;
        private $denominazione;
        private $chiave;
        private $auto = [];
        private $operatore = [];

        public function __construct($a, $b, $c){
            $this->piva = $a;
            $this->denominazione = $b;
            $this->chiave = $c;
        }

        public function pushOperatore($a)
        {
            array_push($a);
        }

        public function getOperatore()
        {
            return $this->auto;
        }

        public function pushAuto($a){
            array_push($a);
        }

        public function getAuto(){
            return $this->auto;
        }

        public function setPiva($a){
            $this->piva = $a;
        }
        public function setDenominazione($b){
            $this->denominazione = $b;
        }
        public function setChiave($c){
            $this->chiave = $c;
        }

        public function getPiva(){
            return $this->piva;
        }

        public function getDenominazione()
        {
            return $this->denominazione;
        }

        public function getChiave()
        {
            return $this->chiave;
        }
    };





?>