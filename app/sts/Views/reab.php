<h1>Pedidos Pendentes</h1>
<table class="tabela">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Linha</th>
                    <th>Posicao</th>
                    <th>Quantidade</th>
                    <th>Prioridade</th>
                    <th>Observações</th>
                    <th>Horario do Pedido</th>
                    <th></th>
                    
                    
                </tr>
            </thead>
            <tbody>

                <?php

                    foreach ($this->Dados['dados'] as $row) {   
                        
                        echo "<tr>";
                        echo "<td>". $row["id"] ."</td>";
                        echo "<td>" . $row['nome_item'] . "</td>";      
                        echo "<td>" . $row['id_linha'] . "</td>"; 
                        echo "<td>"."</td>";
                        echo "<td>" . $row['quantidade'] . "</td>";
                        echo "<td>" . $row['prioridade'] . "</td>";
                        echo "<td>". $row["observacoes"] . "</td>";
                        echo "<td>" .  date('d/m/Y H:i:s',strtotime($row['status_pedido'])) . "</td>";
                        echo "<td>".
                                "<a class='btn btn-sm btn-primary' href='' title='Aceitar Solicitacao'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
                                        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                                    </svg>
                                </a>". 
                                "</td>";
                        echo "</tr>";
                    }
                    
                ?>


            <!--  Teste Modal   -->
            <button class='btn btn-sm btn-primary'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                </svg>
            </button>
            <br><br>
            <dialog>
                <p>Texto anvsjnvs  mbfjisbsfkjg hfuasfbf gahfuigf</p>
                <button>Fechar</button>
            </dialog>
            <!------------------------------------------------------>
                   
            <!------------------------------------------->

            </tbody>
        </table>

        <br><br>

        <h1>Pedidos Efetuados</h1>
<table class="tabela">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Linha</th>
                    <th>Prioridade</th>
                    <th>Observações</th>
                   
                    
                </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Item 1</td>
                <td>50</td>
                <td>5</td>
                <td>alta</td>
                <td>Concluido</td>
                
            </tr>
            </tbody>
        </table>

      