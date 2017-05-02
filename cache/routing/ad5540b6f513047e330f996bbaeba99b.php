<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-01 12:48:29
 */

$app = Yee\Yee::getInstance();

$app->map("/emptable/:EmployeeID", "InsertController::___index")->via("GET")->name("data.index");
$app->map("/insertemployee", "InsertController::___postData")->via("POST")->name("data.index");

