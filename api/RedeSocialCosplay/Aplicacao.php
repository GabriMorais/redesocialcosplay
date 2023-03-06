<?php

namespace RedeSocialCosplay;
class Aplicacao     
{   

    private $controller;
    private function setAplicacao(){
        $load = 'https://redesocialcosplay.vercel.app/api/RedeSocialCosplay/Controllers/';
        $url = explode('/',@$_GET['url'] ?? '');
        if ($url[0] == ''){
            $load.='Home';
        }else {
            $load.= ucfirst(strtolower($url[0]));
        }
        $load.='Controller';
        if (file_exists($load.'.php')) {
            $this->controller = new $load();
        } else {
            echo $load.'teste' ;
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