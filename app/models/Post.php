<?php
class Post {
    private $conn;

    public function __construct() {
        $this->conn = (new Database())->connect();
    }

    public function getPosts() {
        $query = 'SELECT * FROM posts ORDER BY created_at DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}