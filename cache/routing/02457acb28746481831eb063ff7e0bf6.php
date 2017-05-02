<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-07 01:36:43
 */

$app = Yee\Yee::getInstance();

$app->map("/log1", "EmployeeTableController::___index")->via("GET")->name("log1");
$app->map("/emptable", "EmployeeTableController::___test")->via("POST")->name("employeetableshow");

