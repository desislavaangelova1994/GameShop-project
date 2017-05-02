<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-28 01:56:54
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignUpController::___index")->via("GET")->name("signup.index");
$app->map("/signup2", "SignUpController::___registration")->via("POST")->name("signup.validation");

