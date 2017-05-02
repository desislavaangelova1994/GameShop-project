<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-05-02 12:07:04
 */

$app = Yee\Yee::getInstance();

$app->map("/search", "SearchIsbnController::___searchBox")->via("POST")->name("search");

