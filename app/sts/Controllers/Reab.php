<?php
namespace Sts\Controllers;
use Core\ConfigView;
    class Reab{
        
            public function principal(){
                $carregarView = new ConfigView('reab');
                $carregarView->renderizar();
            }
        }
    