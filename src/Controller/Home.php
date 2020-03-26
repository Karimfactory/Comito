<?php

namespace App\Controller;

use Comito\AbstractController;

class Home extends AbstractController
{
    public function print() 
    {
        return $this->render('home');
    }
}