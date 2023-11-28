<?php
    namespace AdmSts\Controllers;

    use AdmCore\ConfigView;
    
    class Cad_Usu
    {
        public function principal(){
            $carregarView = new ConfigView('cadastrar_usuario');
            $carregarView->renderizar();
        }
    }