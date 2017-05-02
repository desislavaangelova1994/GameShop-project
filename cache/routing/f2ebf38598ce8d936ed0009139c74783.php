<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-24 10:24:44
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "SignInController::___login")->via("POST")->name("login.validation");

