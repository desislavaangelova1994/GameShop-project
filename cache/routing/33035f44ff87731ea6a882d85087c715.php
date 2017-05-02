<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-07 07:55:59
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___index")->via("GET")->name("index");
$app->map("/log", "LoginController::___logging")->via("POST")->name("index");

