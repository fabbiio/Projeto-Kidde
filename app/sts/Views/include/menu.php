<div class="topo">
    
        <br>
    <h1 class="home">Usuario: <?php echo $_SESSION['usuario_nome']; ?></h1>
    
    <img class="img" src="<?php echo URL . 'assets/imagens/usuario/'. $_SESSION['usuario_imagem']; ?>">
    

</div>
<nav class="menu">
    <ul class="opcoes">
        <li><a href="<?php echo URL . 'home/index'; ?>">Home</a></li>
        <li>
            <a href="#">Operações</a>
            <ul class="cadastrar">
                <li><a href="<?php echo URL . 'cadastro-item/index'; ?>">Cadastrar Itens </a> </li>
                <li><a href="<?php echo URL . 'reabastecimento/index'; ?>">Solicitar Reabastecimento</a> </li>
                
            </ul>
        </li>
        <li>
            <a href="#">Cadastrar</a>
            <ul class="cadastrar">
                <li><a href="<?php echo URL . 'cadastrar-usuario/index'; ?>">Usuario</a> </li>  
                <li><a href="<?php echo URL . 'cadastrar-linha/index'; ?>">Linha</a> </li>  
                <li><a href="<?php echo URL . 'cadastrar-setor/index';?>">Setor</a> </li> 
            </ul>
        </li>

        <li ><a href="#" >Consulta</a>
            <ul class="cadastrar">
                <li><a href="<?php echo URL . 'consulta-estoque/index'; ?>"> Estoque</a></li>
                <li><a href="<?php echo URL . 'consulta-solicitacoes/index'; ?>"> Solicitacões</a></li>
                <li><a href="<?php echo URL . 'consultar-usuario/index'; ?>"> Usuarios</a></li>

                
            </ul>
        </li>
        <li><a href="<?php echo URL . 'login/logout'; ?>">Sair</a></li>
    </ul>
</nav>
