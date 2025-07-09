<?php

namespace App\Controllers;

use App\Core\Helper;

$maintainanceMode = false;
$services = [
    [
        'title' => 'Duct AC Services',
        'icon' => '',
        'detail' => 'Complete AC installation, cleaning, and maintenance.',
        'url' => ''
    ],
   
    [
        'title' => 'AC Repair',
        'icon' => '',
        'detail' => 'Fast and efficient repairs for all types of air conditioners.',
        'url' => ''
    ],
    [
        'title' => 'Washing Machine & Fridge Repair',
        'icon' => '',
        'detail' => 'Expert repairs for washing machines and refrigerators.',
        'url' => ''
    ],
    [
        'title' => 'Installation Services',
        'icon' => '',
        'detail' => 'Professional installation for all your home appliances.',
        'url' => ''
    ],
     [
        'title' => 'Cooker Repair',
        'icon' => '',
        'detail' => 'Reliable repair services for gas and electric cookers.',
        'url' => ''
    ],

];
if ($maintainanceMode) {
    Helper::view('maintain', [
        'heading' => "Maintainance",

    ]);
}
// include __DIR__.'/../../resources/views/index.view.php';

Helper::view('index', [
    'heading' => "Home",
    'services' => $services
]);
