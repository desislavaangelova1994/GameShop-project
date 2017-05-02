<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-26 11:20:24
 */

$app = Yee\Yee::getInstance();

$app->map("/users/:page", "PaginationController::___testgetPageList")->via("GET")->name("pagination");

