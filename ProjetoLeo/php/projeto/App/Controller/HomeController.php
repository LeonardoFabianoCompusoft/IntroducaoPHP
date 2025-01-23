<?php

class HomeController {
    public function index()
    {
        echo file_get_contents('App/View/home.html');
        return;
        try
        {
            $colecPostagens = Postagem::selecionaTodos();

        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            $colecPostagens = []; // Inicializa como um array vazio em caso de erro
        }

        foreach($colecPostagens as $linha){
            echo "Titulo: ".$linha['titulo'];
            echo "<br>";
            echo "Conteudo: ".$linha['conteudo'];
            echo "<hr>";
        }
    }
}