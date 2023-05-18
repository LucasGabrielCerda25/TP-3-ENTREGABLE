<?php

class Pasajero{
    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($nombre,$numeroAsiento,$numeroTicket){
        $this->nombre = $nombre;
        $this->numeroAsiento = $numeroAsiento;
        $this->numeroTicket = $numeroTicket;


    }

    public function getNombre()             {return $this->nombre;}
    public function getNumeroAsiento()      {return $this->numeroAsiento;}
    public function getNumeroTicket()       {return $this->numeroTicket;}

    public function setNombre($nom)                       {$this->nombre = $nom;}
    public function setNumeroAsiento($ape)                {$this->numeroAsiento = $ape;}
    public function setNumeroTicket($numeroTicket)        {$this->numeroTicket = $numeroTicket;}
    

    public function __toString(){return "\nNombre: ".$this->getNombre()."| NumeroAsiento: ".$this->getNumeroAsiento()."\nDNI: ".$this->getNumeroTicket();}

    public function darPorcentajeIncremento(){return 10;}
}



?>