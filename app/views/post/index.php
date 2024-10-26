<!-- app/views/post/index.php -->
<?php include '../app/views/templates/header.php'; ?>

<div class="content container mt-5">
    <h1 class="mb-4">Blog Posts</h1>

    <div class="row">
        <?php if (!empty($data['posts'])): ?>
        <?php foreach ($data['posts'] as $post): ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" style="min-height: 250px;">
                <!-- Menambahkan min-height -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <p class="card-text"><?php echo substr($post['content'], 0, 100); ?>...</p>
                    <p class="text-muted"><small>Posted on <?php echo $post['created_at']; ?></small></p>
                    <a href="/blog/public/post/show/<?php echo $post['id']; ?>" class="btn btn-primary">Read More</a>
                    <!-- Ganti dari view ke show -->
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-center">No posts available.</p>
        <?php endif; ?>
    </div>
</div>

<?php include '../app/views/templates/footer.php'; ?>