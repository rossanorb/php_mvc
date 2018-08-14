<?php

namespace App;

use Framework\Init\Bootstrap;
/**
 *
 */
class Route extends Bootstrap
{
    public function initRoutes()
    {
        $routes['home'] = array('route' => '/', 'controller' => "indexController", "action" => "index");
        $routes['contact'] = array('route' => '/contact', 'controller' => "indexController", "action" => "contact");
        $this->setRoute($routes);
    }


}
