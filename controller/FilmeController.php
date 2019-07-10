<?php
require_once "model/Filmes.php";
class AtorController{
    public function req($server){
        switch($server['REQUEST_METHOD']){
            case "GET":
           // $Filme=Filme::listarFilmes();
           $filme = new Filme();
           $filme  = $filme->listarFilmes();
           $_REQUEST['filme']=$filme;
            require_once "view/viewFilme.php";
            break;
            case "POST":
            break;
        }
        
    }
}
?>