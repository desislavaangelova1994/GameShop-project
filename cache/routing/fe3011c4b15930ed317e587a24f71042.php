<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-29 07:58:44
 */

$app = Yee\Yee::getInstance();

$app->map("/addbook", "AddBookController::___index")->via("GET")->name("add.book");
$app->map("/addbookdatabase", "AddBookController::___addBookToDatabase")->via("POST")->name("add.book.database");

