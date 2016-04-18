<?php

namespace App\Controllers;

use Micro\Mvc\Controllers\ViewController;

class DefaultController extends ViewController
{
    public function actionIndex()
    {
        return 'Hello, world!';
    }
}
