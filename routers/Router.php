<?php

require_once('../controllers/AnneeController.php');
require_once('../controllers/ClasseController.php');
require_once('../controllers/EleveController.php');
require_once('../controllers/NiveauController.php');
require_once('../controllers/ConnexionController.php');
require_once('../controllers/menuController.php');


class Routeur
{
   public $routes=[];

    public function get(string $url, string $action)
  {
    $this->routes['GET'][$url]=$action;
  }

  public function post(string $url, string $action)
  {
    $this->routes['POST'][$url]=$action;
  }

 public function run()
  {
    $userPath=$_SERVER['REQUEST_URI'];
    $method=$_SERVER['REQUEST_METHOD'];
    foreach ($this->routes[$method] as $path => $action)
    {
      if ($path==$userPath)
    {
        $a=explode('@', $action);
        $method=$a[1];
        $controller=$a[0];
        $controller=new $controller();
        $controller->$method();
        return;
    }

    }
 }

}


