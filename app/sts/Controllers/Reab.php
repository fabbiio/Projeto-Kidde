<?php
namespace Sts\Controllers;
use Core\ConfigView;
use Sts\Models\StsItemConsulta;
use Sts\Models\StsReabConsulta;


    class Reab{
        
        private $Dados;
            public function principal(){

                $con = new StsReabConsulta(); //instancie  um objeto com o nome home da classe stshome
                $this->Dados['dados'] =  $con->consulta();

                $con = new StsItemConsulta(); //instancie  um objeto com o nome home da classe stshome
                $this->Dados['itens'] =  $con->consulta();  

                $carregarView = new ConfigView('reab',$this->Dados);
                $carregarView->renderizar();
            }
        }
    