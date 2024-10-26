<!-- // app/controllers/Post.php -->
<?php
class Post extends Controller {
    public function index() {
        $postModel = $this->model('Post_model');
        $data['posts'] = $postModel->getAllPosts();
        $this->view('post/index', $data);  // Pastikan nama view benar
    }

    public function show($id) {
        $postModel = $this->model('Post_model');
        $data['post'] = $postModel->getPostById($id);
        $this->view('post/view', $data);  // Pastikan nama view benar
    }
}