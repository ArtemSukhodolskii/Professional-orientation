<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class VarProfController extends Controller
{
    public function index()
    {
        $this->view('varProf');
    }
}