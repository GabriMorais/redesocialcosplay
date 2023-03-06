<?php
    namespace RedeSocialCosplay;
    class Mysql{
        private static $pdo;

		public static function conectar(){
		if(self::$pdo == null){
				try{
				self::$pdo = new \PDO('mysql:host=sql12.freesqldatabase.com;dbname=sql12603400','3306','1RLE5gNJvy',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo 'erro ao conectar';
					error_log($e->getMessage());
				}
			}

			return self::$pdo;
		}    
    }
?>
