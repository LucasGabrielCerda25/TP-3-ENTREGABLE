<?php

include "pasajero.php";

class PasajeroEspecial extends Pasajero {
    private $requiereSilla;
    private $requireAsistencia;
    private $requireComida;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$requiereSilla,$requireAsistencia,$requireComida)
        {
            parent::__construct($nombre,$numeroAsiento,$numeroTicket);
                $this->requiereSilla=$requiereSilla;
                $this->requireAsistencia=$requireAsistencia;
                $this->requireComida=$requireComida;

        } 

        public function getRequiereSilla()             {return $this->requiereSilla;}
        public function getRequiereAsistencia()      {return $this->requireAsistencia;}
        public function getRequiereComida()       {return $this->requireComida;}
    
        public function setRequiereSilla($requiereSilla)                       {$this->requiereSilla = $requiereSilla;}
        public function setRequiereAsistencia($requireAsistencia)                {$this->requireAsistencia = $requireAsistencia;}
        public function setRequiereComida($requireComida)        {$this->requireComida = $requireComida;}

        public function darPorcentajeIncremento(){
            if($this->getRequiereSilla()&&$this->getRequiereAsistencia()&&$this->getRequiereComida()){
                $porcentaje = 30;
            }
            elseif ($this->getRequiereSilla()||$this->getRequiereAsistencia()||$this->getRequiereComida()) {
                $porcentaje = 15;
            }   
            else {$porcentaje = 10;}

            return $porcentaje;
        }

 public function __toString()
    {
        $cadena = parent::__toString();
        if($this->getRequiereSilla()){
            $silla = "Si";
        } else {$silla = "No";}
        if($this->getRequiereAsistencia()){
            $asistencia = "Si";
        } else {$asistencia = "No";}
        if($this->getRequiereComida()){
            $comida = "Si";
        } else {$comida = "No";}

        $cadena .= "\nRequiere Silla: ".$silla()."\nRequiere Asistencia: ".$asistencia."\nRequire Comida: ".$comida; 
        return $cadena;
    }

}






?>