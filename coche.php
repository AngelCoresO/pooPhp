<?php
    class Coche extends Vehiculo{
        protected int $numPuertas;
        
        public function __construct(string $marca,string $color,int $kilometros,int $numPuertas){
            parent::__construct($marca,$color,$kilometros);
            $this->numPuertas = $numPuertas;
        }

        //Getters
        // public function getNumPuertas(): int{return $this->numPuertas;}

        //Setters
        // public function setNumPuertas(int $numPuertas): void{$this->numPuertas = $numPuertas;}

    }
?>