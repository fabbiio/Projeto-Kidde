<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsItemConsulta;
use Sts\Models\StsLinhaConsulta;
use Sts\Models\StsReabastecimento;


    class Reabastecimento
    {
        private $Dados;

        public function index(){

            $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if (!empty($this->Dados['pedido'])) { //valida o campo aqui do envio
                unset($this->Dados['pedido']); //remove o campo de envio
                $this->Dados['status_pedido'] =  date("Y-m-d H:i:s");                
                $pedido = new StsReabastecimento();
                $pedido->inserir($this->Dados);        
            }
            $consultaitem = new StsItemConsulta(); //instancie  um objeto com o nome home da classe stshome
            $this->Dados['Itens'] =  $consultaitem->consulta();

            $consultalinha = new StsLinhaConsulta(); 
            $this->Dados['linha'] = $consultalinha->consulta();

           

            $carregarView = new ConfigView('reabastecimento',$this->Dados);
            $carregarView->renderizar();
        }
    }