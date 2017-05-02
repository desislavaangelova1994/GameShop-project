<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-13 12:39:24
 */

$app = Yee\Yee::getInstance();

$app->map("/cart", "AddToCartController::___AddToCart")->via("GET")->name("shoppingcart");

