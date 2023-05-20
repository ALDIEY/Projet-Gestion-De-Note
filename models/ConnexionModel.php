<?php

require_once '../app/connect.php';
class ConnexionModel extends MyConnect
{
    protected $email;
    protected $passwd;
    
    public function __construct()
    {
        parent::__construct(); //appele constructeur parent
    }




}    