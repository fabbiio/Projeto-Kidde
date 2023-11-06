<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
use Sts\Models\StsItemConsulta;

    class Con_Est
    {
        private $Dados;
        public function principal(){
            $con = new StsItemConsulta(); //instancie  um objeto com o nome home da classe stshome
            $this->Dados['Itens'] =  $con->consulta();//informe o indice ao atributo dados com o nome['sts_carousels] e atribua o objeto invocando o metodo index()

            $carregarView = new ConfigView('con_est', $this->Dados);//chama a view passando os dados da Model
            $carregarView->renderizar();
        }
    }