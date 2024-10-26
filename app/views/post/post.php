<!-- app/views/post/index.php -->
<div class="container mt-5">
    <h1>All Blog Posts</h1>
    <a href="/phpmvc/public/post/addPost" class="btn btn-primary mb-4">Add New Post</a>
    <div class="row">
        <?php foreach ($data['posts'] as $post): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <p class="card-text"><?php echo substr($post['content'], 0, 100); ?>...</p>
                    <p><small><?php echo $post['created_at']; ?></small></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>