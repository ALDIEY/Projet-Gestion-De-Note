<?php


require_once('../app/Control.php');


class MenuController extends Control
{

public function display()
{
 $this->render('menu.php', []);
}

}

