<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsItemCadastrar;
    class Cad_Ite
    {

        private $Dados;



        public function principal(){
            $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if (!empty($this->Dados['CadItem'])) { //valida o campo aqui do envio
                unset($this->Dados['CadItem']); //remove o campo de envio
                $this->Dados['status_cadastro'] =  date("Y-m-d H:i:s");                
                $cadItem = new StsItemCadastrar();
                $cadItem->inserir($this->Dados);        
            }
            $carregarView = new ConfigView('cad_ite');
            $carregarView->renderizar();
        }
    }