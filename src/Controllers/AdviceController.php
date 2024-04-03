<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class AdviceController extends Controller
{
    public function index()
    {
        $this->view('advice');
    }
}