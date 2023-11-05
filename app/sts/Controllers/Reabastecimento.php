<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    
    class Reabastecimento
    {
        public function principal(){
            $carregarView = new ConfigView('reabastecimento');
            $carregarView->renderizar();
        }
    }