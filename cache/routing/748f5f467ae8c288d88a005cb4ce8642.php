<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-03 11:42:15
 */

$app = Yee\Yee::getInstance();

$app->map("/depttable/:ID", "DepTableEditController::___index")->via("GET")->name("department");
$app->map("/depttable1/:ID", "DepTableEditController::___editData")->via("POST")->name("sucess");
$app->map("/depttable1/:ID", "DepTableEditController::___deleteDataAction")->via("GET")->name("data.index");

