<?php

namespace App\Controllers;

use Framework\Controller\Action;
use Framework\DI\Container;

class indexController extends Action
{


    public function index()
    {
        $client = Container::getModel("Client");
        $this->views->clients = $client->fetchAll();

        $this->render("index");
    }

    public function contact()
    {
        $client = Container::getModel("Client");
        $this->views->clients = $client->find(2);
        $this->render("contact",false);
    }


}
