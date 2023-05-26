<?php
class View
{
    protected $viewPath;

    public function __construct($viewPath)
    {
        $this->viewPath = $viewPath;
    }

    public function render($view, $data = array())
    {
        $viewFile = $this->viewPath . '/' . $view . '.php';

        if (file_exists($viewFile)) {
            extract($data);
            include($viewFile);
        } else {
            die("La vue '$view' n'existe pas.");
        }
    }
}
