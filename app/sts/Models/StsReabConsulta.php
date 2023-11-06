<?php

namespace Sts\Models;
use Sts\Models\Helper\StsRead;

class StsReabConsulta{

    private $Resultado;

    public function consulta(){//crie um metodo publico chamado index , 
        $listar = new StsRead();//instancie um objeto com o nome listar do tipo StsRead
        $listar->exeRead('reabastecimento' ); //inveoque o metodo execRead passando os valores
        $this->Resultado = $listar->getResultado();//para o atributo resultado atribua  o objeto listar invocando o metodo getResultado
        return $this->Resultado;
         // retorne o atributo resultado
    }
  
}
