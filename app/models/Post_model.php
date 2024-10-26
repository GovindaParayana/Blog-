<!-- // app/models/Post_model.php -->
<?php
class Post_model {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=Blog', 'root', '');
    }

    // Mengambil semua post
    public function getAllPosts() {
        $stmt = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mengambil post berdasarkan ID
    public function getPostById($id) {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Menambahkan post baru ke database
    public function addNewPost($title, $content) {
        $stmt = $this->db->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }
}