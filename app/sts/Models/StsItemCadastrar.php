<?php
    namespace Sts\Models;

use Sts\Models\Helper\StsCreate;


   
    class StsItemCadastrar{
        private $Resultado;
        private $Dados;

        public function inserir(array $Dados){
            $this->Dados = $Dados;
            $inserir = new StsCreate();
            $inserir->exeCreate('item',$this->Dados);
            $_SESSION['msg'] = "<div class='alert alert-success'>Cadastro Realizado</div>";
        }

    }