<?php
require_once dirname(__FILE__) . '/Helper/GetConnection.php';
require_once dirname(__FILE__) . '/Model/Comment.php';
require_once dirname(__FILE__) . '/Repository/CommentRepository.php';
require_once dirname(__FILE__) . '/Repository/Impl/CommentRepositoryImpl.php';

use Impl\CommentRepositoryImpl;
use Model\Comment;


$connection = GetConnection();
$repository = new CommentRepositoryImpl($connection);

$comment = new Comment(name: "arifin", text: "arifin");
// $newComment = $repository->insert($comment);
$newComment = $repository->findById(1);
// print_r($newComment[0]->getName() . PHP_EOL);
// die;

$connection = null;
