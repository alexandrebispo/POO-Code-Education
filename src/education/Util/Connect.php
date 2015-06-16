<?php 

    /**
    *
    * @author: Alexandre Bispo
    * @e-mail alexandrebispo.mestre@gmail.com
    * @copyright 2015 the author
    *
    * */

    namespace Education\Util;

    use PDO;

    class Connect 
    {
        
        public static function getDb()
        {

            try{
                require_once("config.php");

                if(!isset($config['db'])){
                    throw new \InvalidArgumentException("Configuração do Banco de dados não existe!");
                }
                $host   = (isset($config['db']['host']))   ? $config['db']['host'] : null;
                $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
                $user   = (isset($config['db']['user']))   ? $config['db']['user'] : null;
                $pass   = (isset($config['db']['pass']))   ? $config['db']['pass'] : null;

                return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $pass, array(PDO::ATTR_PERSISTENT=>TRUE, PDO::ATTR_AUTOCOMMIT=>FALSE, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

            }catch (\PDOException $e){
                die("Erro código: ". $e->getCode().": ". $e->getMessage());
            }
        }
    }