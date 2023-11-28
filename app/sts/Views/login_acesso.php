<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">

            <form class="login100-form validate-form" method="post" action="">
                <span class="login100-form-title p-b-26">Bem vindo</span>
                <span class="login100-form-title p-b-48"><i class="zmdi zmdi-font"></i></span>

                <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    if (isset($this->Dados['form'])) {
                        $valorForm = $this->Dados['form'];
                    }
                ?>

                <div class="wrap-input100 validate-input" data-validate="O e-mail válido é: a@b.c">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="E-mail"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Digite a senha">
                    <span class="btn-show-pass"><i class="zmdi zmdi-eye"></i></span>
                    <input class="input100" type="password" name="senha">
                    <span class="focus-input100" data-placeholder="Senha"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button name="SendLogin" value="acessar" class="login100-form-btn">Acessar</button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">Não Tem conta?</span>
                    <a class="txt2" href="#">Cadastre-se</a>
                    <a class="txt2" href="/Projeto_2/adm/index.php">Administrador</a>
                </div>
            </form>
        </div>
    </div>
</div>

