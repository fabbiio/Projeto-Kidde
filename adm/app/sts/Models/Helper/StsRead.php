<?php
namespace AdmSts\Models\Helper;
use PDO;
Class StsRead extends StsConn{
    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;
    private $Insert;


    public function execRead($Tabela, $Termos = null, $TermosValores = null){
        //'nome_tabela','WHERE id=:id and status=:status',':id=5&:status=1'
        
        if(!empty($TermosValores)){
            parse_str($TermosValores, $this->Values); //Vai armazenar o valor dentro de values
        }
        //var_dump($this->Values);Mostrar os dados dentros do Values
        
        $this->Select = "SELECT * FROM $Tabela $Termos";//fiz aconsulta
        //SELECT * FROM usuarios WHERE id = :id and status=:status
        $this->Conn = parent::getConn(); // abri conexao com banco
        $this->Query = $this->Conn->prepare($this->Select); //preparei
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);//diz pra ele o modo que  vai executar a consulta
        
        if($this->Values){//existe algo em values
            foreach ($this->Values as $coluna => $valor){//
                $this->Query->bindValue("$coluna", $valor, PDO::PARAM_INT);//separando as colunas e linhas
            }
        
        }
        $this->Query->execute();//executando a consulta
        $this->Resultado = $this->Query->fetchAll(); //Armazenando os dados

    }
   

    public function inserirDados($nome, $cod, $posicao, $quantidade, $id_usuario) {
        $Inserir = "INSERT INTO item (nome, cod, posicao, quantidade,status_cadastro,id_usuario) 
        VALUES ($nome,$cod,$posicao,$quantidade,Now(),$id_usuario)";
        $this->Conn = parent::getConn(); // abri conexao com banco
        $this->Query = $this->Conn->prepare($this->Select); //preparei
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }
    
    public function getResultado(){
        return $this->Resultado;
    }
}
    