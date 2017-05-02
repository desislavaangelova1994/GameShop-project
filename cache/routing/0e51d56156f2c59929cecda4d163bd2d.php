<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-11-01 12:48:29
 */

$app = Yee\Yee::getInstance();

$app->map("/showform", "FormController::___showForm")->via("GET")->name("index");
$app->map("/showform", "FormController::___afterPost")->via("POST")->name("index");

