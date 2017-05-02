<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-31 11:46:16
 */

$app = Yee\Yee::getInstance();

$app->map("/delete/:user_id", "DeleteUserController::___delete")->via("DELETE")->name("users.delete");

