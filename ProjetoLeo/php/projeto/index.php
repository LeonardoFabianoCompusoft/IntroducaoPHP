<?php

require_once 'app/Core/Core.php';

require_once 'lib/DataBase/Connection.php';

require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroController.php';

require_once 'App/Model/Postagem.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{search}}', $saida, $template);

echo $tplPronto;