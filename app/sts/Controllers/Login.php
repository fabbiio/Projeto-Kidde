<?php

namespace Sts\Controllers;

use Core\ConfigView;
use Sts\Models\StsLogin;

class Login
{
    private $Dados;

    public function acesso() {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($this->Dados['SendLogin'])) {
            unset($this->Dados['SendLogin']);
            $visualLogin = new StsLogin();
            $visualLogin->acesso($this->Dados);
            if ($visualLogin->getResultado()) {
                $UrlDestino = URL . 'home/index';
                header("Location: $UrlDestino");
            } else {
                $this->Dados['form'] = $this->Dados;
            }
        }
        $carregarView = new ConfigView("login_acesso", $this->Dados);
        $carregarView->renderizarLogin();
    }
    public function logout()
    {   unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_matricula']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_imagem']);
        unset($_SESSION['usuario_setor']);

        $_SESSION['msg'] = "<div class='alert alert-success'>Deslogado com sucesso</div>";
        $UrlDestino = URL . 'login/acesso';
        header("Location: $UrlDestino");
    }


}