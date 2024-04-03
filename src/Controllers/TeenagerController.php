<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class TeenagerController extends Controller
{
    public function index()
    {
        $this->view('teenager');
    }
}