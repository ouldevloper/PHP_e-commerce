<?php

namespace Vendor;

class Controller{
    protected $action;
    protected $controller;
    protected $params = [];


    public function setAction($action){
        $thids->action = $action;
    }

    public function setController($controller){
        $this->controller = $controller;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }
}