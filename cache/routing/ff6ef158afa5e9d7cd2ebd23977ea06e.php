<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-24 10:25:55
 */

$app = Yee\Yee::getInstance();

$app->map("/library", "LibraryIndexController::___index")->via("GET")->name("index");

