<?php


?>
<div class="title">   
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="icon" viewBox="0 0 16 16">
        <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/> 
    </svg>  
    <h1 class="home" style="color:white">Cadastrar Itens</h1>
</div>
<div>
    <br>
    <br>
    
    <form action="" method="POST"  class="formusu"  enctype="multipart/form-data">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <label for="" class="cadu">Nome:</label>
        <input class="cadi" type="text" name="nome" placeholder="Digite o Nome" required >
        <label for="" class="cadu">COD:</label >
        <input class="cadi" type="number" name="cod" placeholder="Digite o Codigo" required >
        <label for="" class="cadu">Posição:</label>
        <input class="cadi" type="text" name="posicao" placeholder="Digite a Posição" required>
        <label for="" class="cadu">Quantidade:</label>
        <input  class="cadi" type="number" name="quantidade" placeholder="Digite a Quantidade" required>
        <br><br>
        
        <input type="submit" class=volt1 name="CadItem" value="Cadastrar" link rel="home"><!-- nome do campo que valida-->
        <button><a href="home">Voltar</a></button>  
    </form>
</div>
<br><br><br><br>
