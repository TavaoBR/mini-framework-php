<?php 

namespace Src\Controller;
use Config\TemplateConfig; 

class IndexController extends TemplateConfig {

    public function index()
    {
       //$this->view("site/helloworld", ["title" => "Hello World"]);
       include_once("Web/site/helloworld.php");
    }

}