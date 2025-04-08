<?php
namespace App\Controllers;

use App\Core\Helper;

// include __DIR__.'/../../resources/views/index.view.php';

Helper::view('index', ['heading'=>"Home"]);