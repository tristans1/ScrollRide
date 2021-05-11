<?php

class Don  implements JsonSerializable {
    protected $numero = 0;


    private $lesPartenaires = array();

    public function __construct( $numero = 0)
    {
        $this->numero = $numero;
    }



    public function getNumero(): int
    {
        return $this->numero;
    }
    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function jsonSerialize(){ return get_object_vars($this);}
}