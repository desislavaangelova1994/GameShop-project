<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-09 11:03:11
 */

$app = Yee\Yee::getInstance();

$app->map("/", "DetController::___index")->via("GET")->name("index");
$app->map("/about", "DetController::___about")->via("GET")->name("index");
$app->map("/body", "DetController::___body")->via("GET")->name("index");
$app->map("/contact", "DetController::___contacts")->via("GET")->name("index");
$app->map("/cars", "DetController::___cars")->via("POST")->name("cars");
$app->map("/contact1", "DetController::___contactform")->via("POST")->name("index");

