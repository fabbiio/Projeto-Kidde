<?php
namespace Sts\Models\Helper;
use Exception;
use PDO;
//quando é statico se usa self::
//static compartilha com todos,  se muda um, todos os outros sao alterados


    Class StsConn{
        private static $Host = HOST;
        private static $User = USER;
        private static $Pass = PASS;
        private static $Dbname = DBNAME;
        private static $Port = PORT;
        private static $Connect = null;

        #Quando é estatico nao da pra usar this e sim self::

        private static function conectar(){
            try{ #É um bloco que vai testar e se dar erro ele vai pra catch 
                //Conexao banco de dados = 'mysql:host=localhost;charset=utf8;port=3306;dbname=banco,usuario,senha'
                if(self::$Connect == null){
                   self::$Connect = new PDO('mysql:host='.self::$Host.';charset=utf8;port='.self::$Port.'
                   ;dbname='.self::$Dbname,self::$User,self::$Pass);#Coneccao banco de dados
                }
            }catch(Exception $e){
                echo "ERRO: " . $e->getMessage();
                die();
            }
            return self::$Connect;
        }
        public function getConn(){
            return self::conectar();
        }

    }