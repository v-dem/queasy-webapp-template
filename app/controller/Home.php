<?php

namespace app\controller;

use queasy\framework\Controller;

class Home extends Controller
{
    public function get()
    {
        return $this->view('home.php', array(
            'message' => 'Hello, World!'
        ));
    }
}

