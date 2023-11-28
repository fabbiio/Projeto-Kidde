<?php
namespace Sts\Controllers;
use Core\ConfigView;
use Sts\Models\StsItemConsulta;
use Sts\Models\StsReabConsulta;


    class ConsultaSolicitacoes{
        
        private $Dados;
            public function index(){

                $con = new StsReabConsulta(); //instancie  um objeto com o nome home da classe stshome
                $this->Dados['dados'] =  $con->consulta();

                $con = new StsItemConsulta(); //instancie  um objeto com o nome home da classe stshome
                $this->Dados['itens'] =  $con->consulta();  

                $carregarView = new ConfigView('reabastecimento',$this->Dados);
                $carregarView->renderizar();
            }
        }
    