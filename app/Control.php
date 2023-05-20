<?php


class Control
{

public function render($view, $data)
{
  require __DIR__."/../Views/$view";
}


}

