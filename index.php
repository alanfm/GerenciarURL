<?php
header('Content-type: text/html; charset=UTF-8');

include ('./config/config.inc.php');

if (!empty($url))
{
    $arquivo = $rota->buscaEndereco($url);
    
    if ($arquivo)
    {
        echo $arquivo;
    }
    else
    {
        echo 'Página vazia!';
    }
}
else
{
    include './pages/index.php';
}
?>
