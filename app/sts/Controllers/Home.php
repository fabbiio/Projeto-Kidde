<?php

    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsHome;

    class Home
    {
        private $Dados;

        public function principal() {


                //Teste de Conexao
            //$testBD = new StsConn();
            //$testBD->getConn();
            
                //Teste de Consulta
            //$testeRead = new StsRead();
            //$testeRead->execRead('adms_usuarios','LIMIT :limit','limit=1');
            //var_dump($testeRead->getResultado());
            
            //$test2 = new StsRead();
            //$test2->execRead('adms_usuarios','WHERE id=:id',':id=4');
            //var_dump($test2->getResultado());
       
            $home = new StsHome(); //instancie  um objeto com o nome home da classe stshome
            $this->Dados =  $home->index();//informe o indice ao atributo dados com o nome['sts_carousels] e atribua o objeto invocando o metodo index()

           

            

            
            
            $carregarView = new ConfigView('home');
            $carregarView->renderizar();


        }   

    }