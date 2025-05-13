<?php
class Conexao {
   
    private static $instance = null;
 
    public static function getConexao() {
        if (self::$instance === null) {
            self::$instance = new PDO("mysql:host=localhost;dbname=projeto_poo;charset=utf8", "root", "");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
 
?>