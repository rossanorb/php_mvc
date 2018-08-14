<?php

namespace App\Controllers;

use Framework\Controller\Action;
use App\Models\User;
use App\Conn;

class indexController extends Action
{


    public function index()
    {
        echo "<pre>";
        print_r(get_loaded_extensions());
        echo "</pre>";
        
        var_dump(Conn::getDb());
        die();

        $user = new User();
        $this->view->users = $user->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        $this->view->cars = array('Mustang', 'Ferrari');
        $this->render("contact");
    }


}
