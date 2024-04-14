<?php 

class Localizzazione{
    private $latitudine;
    private $longitudine;
    private $data;
    private $targa;

    public function __construct($a,$b,$c,$d){
        $this->latitudine = $a;
        $this->longitudine = $b;
        $this->data = $c;
        $this->targa = $d;  
    }

    public function getLatitudine(){
        return $this->latitudine;
    }

    public function getLongitudine(){
        return $this->longitudine;
    }

    public function getData(){
        return $this->data;
    }

    public function getTarga(){
        return $this->targa;
    }

    public function setLatitudine($a){
        $this->latitudine = $a;
    }

    public function setLongitudine($b)
    {
        $this->longitudine = $b;
    }
    public function setData($c)
    {
        $this->data = $c;
    }
    public function setTarga($d)
    {
        $this->targa = $d;
    }





}

?>