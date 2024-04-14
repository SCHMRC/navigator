<?php 

class Credenziale{
    private $matricola;
    private $password;

    public function __construct($a,$b){
        $this->matricola = $a;
        $this->password = $b;
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
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

?>