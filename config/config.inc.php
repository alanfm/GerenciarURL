<?php
function __autoload($class)
{
    $diretorios = array(
        'controller/',
        'system/',
        'pages/');
    
    foreach ($diretorios as $value)
    {
        if (file_exists('./' . $value . $class . '.class.php'))
        {
            include './' . $value . $class . '.class.php';
        }
    }
}

define('BASE_SITE', 'http://127.0.0.1/Escolar/GerenciarURL/');
define('TITLE_SITE', 'Sistema de Gerenciamento Escolar');

$rota = new Rota();

include 'config/rotas.php';

$url = @$_GET['rota'];