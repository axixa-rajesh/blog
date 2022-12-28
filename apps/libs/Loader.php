<?php 
class Loader{
    function __construct()
    {
        $rq=request();
        $controller=$rq->controller;
        $method=$rq->method;
        $para = $rq->para;
        $path="apps/controllers/$controller.php";
        if(file_exists($path)){
        require_once $path;
        $cobj=new $controller();
        $cobj->$method($para);   
        }
        else{
            echo "404 page not found";
        }
    }
}
