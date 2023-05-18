<?php

include "pasajero.php";

class PasajeroVIP extends Pasajero {
        private $numeroViajeroFrecuente;
        private $cantMillas;

        public function __construct($nombre,$numeroAsiento,$numeroTicket,$numeroViajeroFrecuente,$cantMillas)
        {
            parent::__construct($nombre,$numeroAsiento,$numeroTicket);
                $this->numeroViajeroFrecuente=$numeroViajeroFrecuente;
                $this->cantMillas=$cantMillas;
        } 

        
    public function getNumeroViajeroFrecuente()    {return $this->numeroViajeroFrecuente;}
    public function getCantMillas()                {return $this->cantMillas;}

    public function setNumeroViajeroFrecuente($numeroViajeroFrecuente){$this->numeroViajeroFrecuente=$numeroViajeroFrecuente;}
    public function setCantMillas($cantMillas){$this->cantMillas=$cantMillas;}

    public function darPorcentajeIncremento(){
        if($this->getCantMillas()>300){
            $porcentaje = 30;
        } else {$porcentaje = 35;}

        return $porcentaje;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "\nNumero de Viajero Frecuente: ".$this->getNumeroViajeroFrecuente()."\nCantidad de Millas: ".$this->getCantMillas(); 
        return $cadena;
    }
}






?>