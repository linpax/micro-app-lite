<?php

namespace App\controllers;

use Micro\mvc\controllers\ViewController;

class DefaultController extends ViewController
{
    public function actionIndex()
    {
        return 'Hello, world!';
    }
}
