<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Cad_Lin
    {
        public function principal(){
            $carregarView = new ConfigView('cadastrar_linha');
            $carregarView->renderizar();
        }
    }