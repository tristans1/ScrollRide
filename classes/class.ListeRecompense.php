<?php

class ListeRecompense implements JsonSerializable {
    private $id = 0;
    private $lib = null;



    public function __construct($id = 0, $lib = null)
    {
        $this->id = $id;
        $this->lib = $lib;
    }


    public function getId(){return $this->id;}
    public function getLib(){return $this->lib;}


    public function setId($id){$this->id = $id;}
    public function setLib($lib){$this->lib = $lib;}


    public function jsonSerialize(){ return get_object_vars($this);}

}