<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Con_Usu
    {
        public function principal(){
            $carregarView = new ConfigView('con_usu');
            $carregarView->renderizar();
        }
    }