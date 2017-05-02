<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-04 12:09:24
 */

$app = Yee\Yee::getInstance();

$app->map("/users", "DisplayUserController::___display")->via("GET")->name("users.display");

