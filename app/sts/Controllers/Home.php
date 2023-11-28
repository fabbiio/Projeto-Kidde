<?php

    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsHome;

    class Home
    {
        private $Dados;

        public function index() {

            $home = new StsHome(); //instancie  um objeto com o nome home da classe stshome
            $this->Dados =  $home->index();//informe o indice ao atributo dados com o nome['sts_carousels] e atribua o objeto invocando o metodo index()

            $carregarView = new ConfigView('home');
            $carregarView->renderizar();


        }   

    }