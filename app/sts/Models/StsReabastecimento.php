<?php
namespace Sts\Models;

use Sts\Models\Helper\StsCreate;
use Sts\Models\Helper\StsRead;


   
    class StsReabastecimento{
        private $Resultado;
        private $Dados;

        public function inserir(array $Dados){
            $this->Dados = $Dados;
            $inserir = new StsCreate();
            $inserir->exeCreate('reabastecimento',$this->Dados);
            $_SESSION['msg'] = "<div class='alert alert-success'>Pedido Realizado</div>";
        }

        public function consulta(){//crie um metodo publico chamado index , 
            $listar = new StsRead();//instancie um objeto com o nome listar do tipo StsRead
            $listar->exeRead('item' ); //inveoque o metodo execRead passando os valores
            $this->Resultado = $listar->getResultado();//para o atributo resultado atribua  o objeto listar invocando o metodo getResultado
            return $this->Resultado;
             // retorne o atributo resultado
             
        }
        

        
    }