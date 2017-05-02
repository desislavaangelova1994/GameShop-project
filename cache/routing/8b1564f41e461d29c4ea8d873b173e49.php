<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-01 12:48:29
 */

$app = Yee\Yee::getInstance();

$app->map("/user", "UserController::___index")->via("GET")->name("index");
$app->map("/users", "UserController::___test")->via("POST")->name("users");

