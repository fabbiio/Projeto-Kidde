<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Cad_Set
    {
        public function principal(){
            $carregarView = new ConfigView('cad_set');
            $carregarView->renderizar();
        }
    }