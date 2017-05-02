<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-14 08:04:56
 */

$app = Yee\Yee::getInstance();

$app->map("/cart/:id", "CartController::___cart")->via("POST")->name("shoppingcart");

