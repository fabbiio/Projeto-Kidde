<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Cad_Lin
    {
        public function principal(){
            $carregarView = new ConfigView('cad_lin');
            $carregarView->renderizar();
        }
    }