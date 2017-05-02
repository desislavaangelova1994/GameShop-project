<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-08 08:10:04
 */

$app = Yee\Yee::getInstance();

$app->map("/ok", "TestController::___indexAction")->via("POST")->name("test.index");

