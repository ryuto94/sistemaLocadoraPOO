<?php
    $req = (key($_GET));
    $controller = $req."controller";
    
    require_once "controller/".$controller.".php";
    
    $solicitacao = new $controller();
    $solicitacao->req($_SERVER);
