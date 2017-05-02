<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-14 11:26:17
 */

$app = Yee\Yee::getInstance();

$app->map("/gameshop", "StoreController::___index")->via("GET")->name("index");
$app->map("/action", "StoreController::___action")->via("GET")->name("action.choice");
$app->map("/fantasy", "StoreController::___fantasy")->via("GET")->name("fantasy.choice");
$app->map("/beating", "StoreController::___beating")->via("GET")->name("beating.choice");
$app->map("/register", "StoreController::___register")->via("GET")->name("registering");
$app->map("/log", "StoreController::___log")->via("GET")->name("loginform");
$app->map("/logged", "StoreController::___logg")->via("POST")->name("logged");
$app->map("/logout", "StoreController::___logout")->via("GET")->name("logout");
$app->map("/aboutus", "StoreController::___about")->via("GET")->name("logout");
$app->map("/services", "StoreController::___services")->via("GET")->name("logout");
$app->map("/registration", "StoreController::___login")->via("POST")->name("registered");

