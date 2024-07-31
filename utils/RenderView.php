<?php

class RenderView
{
    public function render($view, $args = [])	
    {
        extract($args);
        require_once __DIR__ . "/../views/$view.php";
    }
}