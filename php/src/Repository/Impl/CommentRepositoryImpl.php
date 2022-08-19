<?php

namespace Impl;

require_once dirname(__FILE__) . '/../CommentRepository.php';

use PDO;
use Repository\CommentRepository;
use Model\Comment;
use PDOException;

class CommentRepositoryImpl implements CommentRepository
{
    // private $connection = GetConnection();
    public function __construct(private PDO $connection)
    {
    }

    public function insert(Comment $comment): Comment
    {
        try {
            $this->connection->beginTransaction();
            $sql = "INSERT INTO comments(name, text) VALUES (?,?)";
            $result = $this->connection->prepare($sql);
            $result->execute([$comment->getName(), $comment->getText()]);
            $id = $this->connection->lastInsertId();
            $data = $comment->setId($id);
            $this->connection->commit();
        } catch (PDOException $e) {
            $data = $e->getMessage();
            $this->connection->rollBack();
        }
        return $data;
    }
    public function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments where id = ?";
        $statment = $this->connection->prepare($sql);
        $statment->execute([$id]);

        if ($row = $statment->fetch()) {
            return new Comment(
                id: $row['id'],
                name: $row['name'],
                text: $row['text']
            );
        } else {
            return null;
        }
    }
    public function findAll(): array
    {
        $datas = [];
        $sql = "SELECT * FROM comments";
        $statment = $this->connection->prepare($sql);
        $statment->execute();
        while ($row = $statment->fetch()) {
            array_push($datas, new Comment(
                id: $row['id'],
                name: $row['name'],
                text: $row['text']
            ));
        }
        return $datas;
    }
}
