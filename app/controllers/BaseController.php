<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
class BaseController{
    protected function render($viewfile, $data = []){
        $blade = new Blade('./app/views', './storage');
        echo $blade->make($viewfile, $data)->render();
    }
}

?>