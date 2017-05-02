<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-28 04:18:09
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LogInController::___login")->via("POST")->name("login.validation");

