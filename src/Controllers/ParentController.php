<?php

namespace App\Controllers;

use APP\Kernel\Controller\Controller;

class ParentController extends Controller
{
    public function index()
    {
        $this->view('parent');
    }
}