<?php

namespace Sts\Models;

use Sts\Models\Helper\StsRead;

class StsLogin
{
    private $Dados;
    private $Resultado;

    function getResultado()
    {
        return $this->Resultado;
    }

    public function acesso(array $Dados)
    {
        $this->Dados = $Dados;
        $validaLogin = new StsRead();
        $validaLogin->fullRead("SELECT * FROM usuario user 
                                WHERE email = :email LIMIT :limit",
                                "email={$this->Dados['email']}&limit=1");
        $this->Resultado = $validaLogin->getResultado();
        if (!empty($this->Resultado)) {
            $this->validarSenha();
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Usuário não encontrado!</div>";
            $this->Resultado = false;
        }
    }

    private function validarSenha()
    {
        //Na hora de cadastrar senha usar na seguinte maneira
        //password_hash('123456', PASSWORD_DEFAULT);

        if (password_verify($this->Dados['senha'], $this->Resultado[0]['senha'])) {
            $_SESSION['usuario_id'] = $this->Resultado[0]['id'];
            $_SESSION['usuario_matricula'] = $this->Resultado[0]['matricula'];
            $_SESSION['usuario_nome'] = $this->Resultado[0]['nome'];
            $_SESSION['usuario_email'] = $this->Resultado[0]['email'];
            $_SESSION['usuario_imagem'] = '_padrao.jpg';//$this->Resultado[0]['imagem'];
            $_SESSION['usuario_setor'] = $this->Resultado[0]['setor'];
            $this->Resultado = true;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Usuário ou a senha incorreto!</div>";
            $this->Resultado = false;
        }
    }


}