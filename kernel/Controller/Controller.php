<?php

namespace APP\Kernel\Controller;

use APP\Kernel\View\View;

abstract class Controller
{
    private View $view;

    public function view(string $name)
    {
        $this->view->page($name);
    }

    public function setView(View $view)
    {
        $this->view = $view;
    }
}