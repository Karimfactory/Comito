<?php

namespace App\Controller;

class Home 
{
    public function print() 
    {
        include dirname(dirname(__DIR__)) . '/templates/home.phtml';
    }
}