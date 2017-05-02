<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-01 12:48:29
 */

$app = Yee\Yee::getInstance();

$app->map("/log", "LogController::___index")->via("GET")->name("log1");
$app->map("/logs", "LogController::___test")->via("POST")->name("");

