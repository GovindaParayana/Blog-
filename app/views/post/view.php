<!-- app/views/post/view.php -->
<?php include '../app/views/templates/header.php'; ?>

<div class="content container mt-5">
    <h1><?php echo $data['post']['title']; ?></h1>
    <p><small>Posted on <?php echo $data['post']['created_at']; ?></small></p>
    <p><?php echo nl2br($data['post']['content']); ?></p> <!-- nl2br untuk menampilkan line break -->

    <a href="/blog/public/post" class="btn btn-primary">Back to Posts</a>
</div>

<?php include '../app/views/templates/footer.php'; ?>