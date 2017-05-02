<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-16 10:25:32
 */

$app = Yee\Yee::getInstance();

$app->map("/avtomorgadetelina", "WebsiteController::___index")->via("GET")->name("avtomorga");
$app->map("/catalog", "WebsiteController::___catalog")->via("GET")->name("avtomorgadetelina");

