<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-04-24 08:14:21
 */

$app = Yee\Yee::getInstance();

$app->map("/bookedit/:book_id", "EditBooksController::___BookData")->via("GET")->name("books.getdata");
$app->map("/bookedit1/:book_id", "EditBooksController::___postData")->via("POST")->name("books.edit");
$app->map("/deletebook/:book_id", "EditBooksController::___delete")->via("GET")->name("users.delete");

