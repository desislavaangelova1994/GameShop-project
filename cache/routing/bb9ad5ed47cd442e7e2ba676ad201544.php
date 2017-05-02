<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-19 12:27:43
 */

$app = Yee\Yee::getInstance();

$app->map("/books/:page", "DisplayBooksController::___displaybooks")->via("GET")->name("books.display");

