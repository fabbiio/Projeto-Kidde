
<div class="title"> 
    <h1 class="" style="text-align: center;color:white;">Solicitar Reabastecimento</h1>   
</div>
<div>
    <br><br>
    <form action="" method="post"  class="formusu"  enctype="multipart/form-data">
    <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <label for="" class="cadu">Nome:</label >
        <input class="cadi" type="text" value="<?php echo $_SESSION['usuario_nome'] ?>"name="responsavel"   >
        <label for="" class="cadu">Linha:</label>
        <select class="form-select" name="id_linha"  style="font-size:13px" required > 
            <option value="" >SELECIONE</option>    
            <?php
                foreach ($this->Dados['linha'] as $row) {  
                    echo' <option>'. strtoupper($row['nome']). '</option>';
                }
    
            ?>
                
        </select>
        <br>
        <br>
        <label for="" class="cadu">Item:</label>
        <select class="form-select" name="nome_item"  style="font-size:13px" required > 
            <option value="" >SELECIONE</option>    
            <?php
                foreach ($this->Dados['Itens'] as $row) {  
                    echo' <option>'. strtoupper($row['nome']). '</option>';
                }
    
            ?>
                
        </select>
        <br><br>
        <label for="" class="cadu" style="padding-top:5px;">Quantidade:</label>

        <input class="cadi" type="number" name="quantidade"  placeholder="Digite a Quantidade" minlength="" required>
       
        <label for="" class="cadu">Prioridade:</label>
        <select class="form-select" name="prioridade"  style="font-size:13px" required > 
            <option value="" >SELECIONE</option>            
            <option> BAIXA </option>
            <option> MEDIA </option>
            <option> ALTA </option>
        </select>
        <br><br>
        <label for="observacao">Observações:</label>
        <br>
        <textarea id="observacao" name="observacoes" placeholder="Adicione observações" style=" width: 360px;"></textarea>
        <br><br>
        
        <input type="submit" class=confirmar name="pedido" value="Enviar Pedido" link rel="home">
        <button class="volt1"><a href="home">Voltar</a></button>
    </form>
    
    <br><br><br>
</div>