<?php

namespace App\Controllers;
use Framework\Controller\Action;

class indexController extends Action
{


    public function index()
    {
        $this->view->cars = array('Mustang', 'Ferrari');
        $this->render("index");
    }

    public function contact()
    {
        $this->view->cars = array('Mustang', 'Ferrari');
        $this->render("contact");
    }


}
