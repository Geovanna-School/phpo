<?php
require("carro.php"); //chama a classe do arquivo carro.php
require("retangulo.php");
//nome da classe
    class Fruta{
        //nome dos atributos
        public $nome; //qualquer outra classe pode ter acesso a variável public
        public $cor;

        /*Métodos*/

        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }
        function set_name($nome){
            $this->nome = $nome;
        }
        function set_cor($cor){
            $this->cor = $cor;
        }
        //
        function get_name(){
            return $this->nome;
        }
        function get_cor(){
            return $this->cor;
        }
    }
//A palavra new cria um objeto do tipo Fruta
$maca = new Fruta("maca_ifsp", "vermelho");
/*Atribuindo um nome para o meu objeto através do método set_name */
//$maca->set_name("maca_ifsp");
//o comando abaixo imprime se o atributo for public
//echo $maca->nome;
/* o comando abaixo impreme se o atributo for public ou private*/
echo "</br>".$maca->get_name();
//$maca->set_cor("vermelho");
echo "</br>".$maca->get_cor();

$carro = new Carro("Ferrari", "Ferrari Roma", "2020");
echo  "</br>".$carro->get_marca();
echo  "</br>".$carro->get_modelo();
echo  "</br>".$carro->get_ano();

$retangulo_ifsp = new Retangulo(2,4);
echo."</br>".$retangulo_ifsp->calcular_area();
echo."</br>".$retangulo_ifsp->calcular_perimetro();
?>
