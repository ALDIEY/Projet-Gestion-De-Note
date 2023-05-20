<?php


require_once('../app/Control.php');


class ConnexionController extends Control
{

public function connectel()
{
 $this->render('Connexion.php', []);
}

}