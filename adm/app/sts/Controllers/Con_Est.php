<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Con_Est
    {
        public function principal(){
            $carregarView = new ConfigView('con_est');
            $carregarView->renderizar();
        }
    }