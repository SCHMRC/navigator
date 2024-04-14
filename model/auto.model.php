<?php 

class Auto{
    private $tipologia;
    private $targa;
    private $stato;
    private $piva;
    private $localizzazioni = [];

    public function __construct($a, $b, $c, $d){
        $this->tipologia = $a;
        $this->targa = $b;
        $this->stato = $c;
        $this->piva = $d;
        
    }

    public function pushLocalizzazione($a){
        array_push($a);
    }

    public function getLocalizzazioni(){
        return $this->localizzazioni;
    }

    public function getTipologia(){
        return $this->tipologia;
    }
    public function getTarga(){
        return $this->targa;
    }
    public function getStato(){
        return $this->stato;
    }
    public function getPiva(){
        return $this->piva;
    }

    public function setTipologia($a){
         $this->tipologia = $a;
    }
    public function setTarga($b){
         $this->targa = $b;
    }
    public function setStato($c){
         $this->stato = $c;
    }
    public function setPiva($d){
         $this->piva = $d;
    }


}

?>