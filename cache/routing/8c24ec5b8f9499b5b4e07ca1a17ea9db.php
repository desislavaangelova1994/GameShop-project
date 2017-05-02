<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-24 10:10:17
 */

$app = Yee\Yee::getInstance();

$app->map("/edit/:user_id", "EditUserController::___UserData")->via("GET")->name("users.getdata");
$app->map("/edit1/:user_id", "EditUserController::___postData")->via("POST")->name("users.edit");
$app->map("/delete/:user_id", "EditUserController::___delete")->via("GET")->name("users.delete");

