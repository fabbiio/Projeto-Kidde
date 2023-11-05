<nav class="menu">
    <ul class="opcoes">
        <li><a href="home">Home</a></li>
        <li>
            <a href="#">Cadastrar</a>
            <ul class="cadastrar">
                <li><a href="cad_usu">Usuario</a> </li>  
                <li><a href="cad_lin">Linha</a> </li>  
                <li><a href="cad_set">Setor</a> </li> 
            </ul>
        </li>

        <li ><a href="#" >Consulta</a>
            <ul class="cadastrar">
                <li><a href="con_est"> Estoque</a></li>
                <li><a href="con_usu"> Usuarios</a></li>
                
            </ul>
        </li>
        <li><a href="#">Sair</a></li>
    </ul>
</nav>
 
<style>
    :root{
    --cor-fundo:  rgb(36, 34, 41);
    --cor-primaria:  rgb(232, 253, 241);
    --cor-hover:  rgb(185, 172, 226);
    --cor-principal: #5134d2;
}
*{
    
    font-family: "Ubuntu", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    
}
.img{
    width: 40px;
    height: 40px;
    border-radius: 80%;
    position: relative;
    margin-left: 95%;
    margin-top: -50px;

}
.nome{
    text-align: center;
    width: 20px;
    position: relative;
    margin-left: 1448px;
    font-size: 12px;
}
.topo{
    background-color: var(--cor-principal);
    padding-top: 20px;
    padding-bottom: 20px;
    color: aliceblue;

}
.topo h1{
    text-align: center;
    
}

.opcoes{
    
    list-style-type: none;
    padding: 0;
}

.menu ul{
    background-color:  var(--cor-fundo);
}

.menu ul li{
    display: inline;
    position: relative;
}

.menu ul li a{
    color: var(--cor-primaria);
    text-decoration: none;
    display: inline-block;
    padding: 10px;
    text-align: center;
    /*padding-left: 15px;*/
}

.menu ul li a:hover{
    background-color: var(--cor-hover);
    color: var(--cor-principal);
    

}

/* Menu secundario*/

.cadastrar {
    display: none;
    left: 0;
    position: absolute;
    
}


.menu ul li:hover .cadastrar {
    display: block;
    
}


.cadastrar li a{
    display: block;
}

.menu{
text-align: center;
}



</style>