<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-07 02:01:48
 */

$app = Yee\Yee::getInstance();

$app->map("/emptable/:EmployeeID", "EmployeeEditController::___editData")->via("GET")->name("editemployee");
$app->map("/emptable2/:EmployeeID", "EmployeeEditController::___postUpdateData")->via("POST")->name("data.index");
$app->map("/emptable1/:EmployeeID", "EmployeeEditController::___deleteDataAction")->via("GET")->name("deleteemployee");

