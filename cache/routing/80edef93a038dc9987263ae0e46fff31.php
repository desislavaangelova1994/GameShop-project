<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-07 11:21:47
 */

$app = Yee\Yee::getInstance();

$app->map("/department", "DepController::___index")->via("GET")->name("dept");
$app->map("/department", "DepController::___success")->via("POST")->name("sucess");

