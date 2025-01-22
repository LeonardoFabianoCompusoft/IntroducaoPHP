<?php

class Postagem
{
    public static function selecionaTodos()
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=ProjPHP;', 'root', 'teste@123');
            var_dump($con);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
        }
    }
}
