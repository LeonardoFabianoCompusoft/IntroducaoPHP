<?php

class HomeController {
    public function index()
    {
        Postagem::selecionaTodos();
    }
}