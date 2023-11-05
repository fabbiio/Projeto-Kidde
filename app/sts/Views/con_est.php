
<div class="title">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="icon" viewBox="0 0 16 16">
        <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/> 
    </svg>  
    <h1 class="home">Consulta Estoque</h1> 
</div>
<div class="divisao12">
    <h1></h1>
</div>
    <div>
        <ul class="divisao2">
                <!--<li><a href="./config/importar.php">Importar</a></li>-->
            <li><a href="#">Importar</a></li>
            <li><a href="./config/gerar_planilha.php">Exportar</a></li> 
            <li><a href="" onclick="imprimir()">Imprimir</a></li>   
        </ul>
    </div>
    <!---------------------------------------------------------------------------------------------------------------------->
    <div class="divisao3">
        <div class="pesquisa">
            <input type="search" class='form-control' placeholder="Pesquisar" id="pesquisar" >
            <button onclick="searchData()" class="pes">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>    
        </div>
    </div>
    <table class="tabela">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Posição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data do Cadastro</th>
                <th ></th>
            </tr>
        </thead>
    <tbody>
        <?php

        foreach ($this->Dados as $row) {
            
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['cod'] . "</td>";
            echo "<td>" . $row['posicao'] . "</td>";
            echo "<td>" . $row['quantidade'] . "</td>";
            echo "<td>" . $row['status_cadastro'] . "</td>";
            echo "<td>".  "</td>";
            echo "</tr>";
        }
?>
    <tr>
        <td scope="row">1</td>
        <td>Item 1</td>
        <td>2-3-4</td>
        <td>50</td>
        <td></td>
        <td> 
        
        <a class='btn btn-sm btn-primary' href='' title='Editar'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16' id='a'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>                
            </svg>
        </a>                
        <a class='btn btn-sm btn-danger' style="background-color:red; border:none" href=''>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16' id='d'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
            </svg>
        </a>                       
        </td>
    </tr>
    
  </tbody>
</table>

<!------------------------------------------------------------------------------------------------------------------------------------------->
<script>//Java script da parte de filtrar 

    



    var search = document.getElementById('pesquisar');
 
     search.addEventListener("keydown", function(event){
         if(event.key === "Enter")
         {
             searchData();
         }
     });
 
     function searchData()
     {
         window.location = 'produtos.php?search='+search.value;
     }


     function imprimir(){
        window. print()
    }

 </script>
</html>