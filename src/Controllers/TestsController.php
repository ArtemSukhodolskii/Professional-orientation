<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class TestsController extends Controller
{
    public function index()
    {
        $this->view('tests');
    }
}