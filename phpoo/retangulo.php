<?php 
    class Retangulo{
        public $altura;
        public $largura;

        function __construct($altura, $largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }
        function set_largura($largura){
            $this->largura = $largura;
        }
        function get_largura(){
            return $this->largura;
        }
        function set_altura($largura){
            $this->altura = $altura;
        }
        function get_altura(){
            return $this->laltura;
        }
        function calcular_area(){
            return ($this->altura*$this->largura);
        }
        function calcular_perimetro(){
            return (2*$this->altura+2*$this->largura);
        }
    }


?>