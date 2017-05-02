<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-07 01:40:25
 */

$app = Yee\Yee::getInstance();

$app->map("/depttableadd", "AddDepartmentController::___index1")->via("GET")->name("add.department");
$app->map("/dep", "AddDepartmentController::___addNew")->via("POST")->name("adddept.post");

