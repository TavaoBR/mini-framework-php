<?php 

namespace Src\Routers;

use CoffeeCode\Router\Router;

class Routers {

    private $dominio;
    private Router $router;

    public function __construct(){
        $this->dominio = routerConfig();
        $this->router = new Router($this->dominio);
    }


    public function get(){

        $rota = $this->router;
        $rota->group(null)->namespace("Src\Controller");
        $rota->get("/", "IndexController:index");

        $rota->group("oops")->namespace("Src\Controller\Error");
        $rota->get("/{errocode}", "ErrorController:notFound");

        $rota->dispatch();

        if($rota->error()){
            $rota->redirect("/oops/{$rota->error()}");
        }

    }

    public function post(){

    }

    public function put(){

    }

    public function delete(){

    }
}