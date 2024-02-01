<?php


/* Toby Goetz
 * 2/1/2024
 * https://tgoetzgr.greenriverdev.com/SDEV328/week5/index.php
 * This is my CONTROLLER for the Diner App
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); // Static Method


// Define order1 route
$f3->route('GET|POST /order1', function ($f3) {
//    echo 'Order Form Part I';

    // if the form has been posted
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        // Validate the data
//        $food = $_POST['food'];
//        $meal = $_POST['meal'];
//
//        // Put the data in the session array
//        $f3->set('SESSION.food', $food);
//        $f3->set('SESSION.meal', $meal);
//
//        // Redirect to order2 route
//        $f3->reroute('order2');
//    }

    //Display a view page
    $view = new Template();
    echo $view->render('views/home.html');

});

$f3->run();