<?php

    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    use AdmSts\Models\StsHome;

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
       
           

            

            
            
            $carregarView = new ConfigView('home');
            $carregarView->renderizar();


        }   

    }