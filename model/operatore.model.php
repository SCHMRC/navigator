<?php 

class Operatore{
    private $matricola;
    private $nominativo;
    private $n_patente;
    private $ruolo;
    private $piva;

    public function __construct($a,$b,$c,$d,$e){
        $this->matricola = $a;
        $this->nominativo = $b;
        $this->n_patente = $c;
        $this->ruolo = $d;
        $this->piva = $e;
        
    }

    

    /**
     * Get the value of matricola
     */ 
    public function getMatricola()
    {
        return $this->matricola;
    }

    /**
     * Set the value of matricola
     *
     * @return  self
     */ 
    public function setMatricola($matricola)
    {
        $this->matricola = $matricola;

        return $this;
    }

    /**
     * Get the value of nominativo
     */ 
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set the value of nominativo
     *
     * @return  self
     */ 
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get the value of n_patente
     */ 
    public function getN_patente()
    {
        return $this->n_patente;
    }

    /**
     * Set the value of n_patente
     *
     * @return  self
     */ 
    public function setN_patente($n_patente)
    {
        $this->n_patente = $n_patente;

        return $this;
    }

    /**
     * Get the value of ruolo
     */ 
    public function getRuolo()
    {
        return $this->ruolo;
    }

    /**
     * Set the value of ruolo
     *
     * @return  self
     */ 
    public function setRuolo($ruolo)
    {
        $this->ruolo = $ruolo;

        return $this;
    }

    /**
     * Get the value of piva
     */ 
    public function getPiva()
    {
        return $this->piva;
    }

    /**
     * Set the value of piva
     *
     * @return  self
     */ 
    public function setPiva($piva)
    {
        $this->piva = $piva;

        return $this;
    }
}

?>