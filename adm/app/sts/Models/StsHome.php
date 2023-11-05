<?php
    //Crie uma classe com o nome StsHome, com atributo privado $resultado.
    
namespace AdmSts\Models;

use AdmSts\Models\Helper\StsRead;

    class StsHome{
        private $Resultado;

        public function index(){//crie um metodo publico chamado index , 
            $listar = new StsRead();//instancie um objeto com o nome listar do tipo StsRead
            $listar->execRead('qtd_cadastrado'); //inveoque o metodo execRead passando os valores
            $this->Resultado = $listar->getResultado();//para o atributo resultado atribua  o objeto listar invocando o metodo getResultado
            return $this->Resultado; // retorne o atributo resultado
        }

    }