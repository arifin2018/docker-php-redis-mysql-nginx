<?php

namespace Repository {
    require_once dirname(__FILE__) . '/../Helper/GetConnection.php';
    require_once dirname(__FILE__) . '/../Model/Comment.php';

    use Model\Comment;

    interface CommentRepository
    {
        public function insert(Comment $comment): Comment;
        public function findById(int $id): ?Comment;
        public function findAll(): array;
    }
}
