<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-29 01:13:00
 */

$app = Yee\Yee::getInstance();

$app->map("/adduser", "AddUserController::___adduser")->via("GET")->name("add.user");
$app->map("/adding", "AddUserController::___adding")->via("POST")->name("add.user.database");

