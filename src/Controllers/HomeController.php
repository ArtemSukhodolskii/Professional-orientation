<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home');
    }
}