<?php

    class Postagem
    {
         public static function selecionaTodos()
        {
            $con = conexao::getconn();

            $sql = "SELECT * FROM postagem ORDER BY id DESC";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }
    }