<?php

namespace App\Core;

class View {

    public function __construct($view, $data=null) {
        require_once("src/Views/{$view}.php");
    }
}