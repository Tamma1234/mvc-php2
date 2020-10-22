<?php

use App\Controllers\HomeController;
use App\Controllers\EmployController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';


switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'add-com':
        $ctr = new HomeController();
        $ctr->addCompa();
        break;
    case 'save-add-com':
        $ctr = new HomeController();
        $ctr->saveAddCom();
        break;
    case 'remove-com':
        $ctr = new HomeController();
        $ctr->remove();
        break;
    case 'edit-compa':
        $ctr = new HomeController();
        $ctr->editForm();
        break;
    case 'save-edit-compa':
        $ctr = new HomeController();
        $ctr->saveEditForm();
        break;
    case 'san-pham':
        $ctr = new EmployController();
        $ctr->index();
        break;
    case 'add-form':
        $ctr = new EmployController();
        $ctr->addForm();
        break;
    case 'save-add-form':
        $ctr = new EmployController();
        $ctr->saveAddForm();
        break;
    case 'edit-form':
        $ctr = new EmployController();
        $ctr->editForm();
        break;
    case 'save-edit-form':
        $ctr = new EmployController();
        $ctr->saveEditForm();
        break;
    case 'remove-employ':
        $ctr = new EmployController();
        $ctr->remove();
        break;

    default:
        # code...
        break;
}
