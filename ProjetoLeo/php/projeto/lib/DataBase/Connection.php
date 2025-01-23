<?php

    abstract class conexao
    {
        private static $conn;

        public static function getconn()
        {
            if(self::$conn == null)
            {
                try
                {
                    self::$conn = new PDO('mysql:host=mysql;dbname=ProjPHP', 'root', 'teste@123');

                 } catch (PDOException $e)
                {
                    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
                }
            }
            return self::$conn;
        }
    }
