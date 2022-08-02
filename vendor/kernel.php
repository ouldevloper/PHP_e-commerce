<?php
namespace Vendor;

class Kernel{
    private $action="";
    private $controller = "";
    private $params = [];

    public  function boot(){
        
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("&",$url);
        $route = [];
        foreach($url as $key){
            $tmp = explode("=",$key);
            if(isset($tmp)){
                if(!array_key_exists($tmp[0],$route)){
                    $route[$tmp[0]] = $tmp[1];
                }
            }
        }
       
        if(isset($route['path'])){
            $this->controller = "Controllers\\".ucfirst(strtolower($route['path']))."Controller";
            $this->action     = $route['action'];
        }
        // /die($this->controller);

        $this->params = $route;
        unset($this->params['path']);
        unset($this->params['action']);
        if(!\class_exists($this->controller)){
            $this->controller = "Controller\\ErrorController";
            $this->action  = "error";
        }else{
            if(!\method_exists($this->controller,$this->action)){
                if(\method_exists($this->controller,"index")){
                    $this->action = "index";
                }else{
                    $this->controller = "Controllers\\notfound";
                    $this->action = "error";
                    
                }
            }
        }
        $cls = new $this->controller();
        $cls->setController($this->controller);
        $cls->setAction($this->action);
        $cls->setParams($this->params);
        $cls->{$this->action}();
    }
}