<?php

namespace RedeSocialCosplay;
class Aplicacao     
{   

    private $controller;
    private function setAplicacao(){
        $load = 'https://redesocialcosplay.vercel.app/api/RedeSocialCosplay/Controllers/';
        echo $load.'teste' ;
        $url = explode('/',@$_GET['url'] ?? '');
        if ($url[0] == ''){
            $load.='Home';
        }else {
            $load.= ucfirst(strtolower($url[0]));
        }
        $load.='Controller';
        echo $load.'teste' ;
        if (file_exists($load.'.php')) {
            $this->controller = new $load();
        } else {
            echo $load.'teste2' ;
            include('Views/pages/404.php');
            die();
        }   
    }

     
    public function  run(){
        $this->setAplicacao();
        $this->controller->index();
    }   
}




?>