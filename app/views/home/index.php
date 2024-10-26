<!-- app/views/home/index.php -->
<?php include '../app/views/templates/header.php'; ?>

<div class="content container text-center mt-5">
    <h1 class="display-4">Selamat Datang di Blog Saya</h1>
    <p class="lead">Ini adalah halaman utama blog Anda.</p>

    <!-- Foto Profil -->
    <img src="/blog/public/img/profile.png" class="img-fluid mt-4" alt="Profile Picture"
        style="border-radius: 50%; width: 200px; height: 200px;">

    <!-- Button di bawah foto -->
    <div class="mt-4">
        <a href="/blog/public/post" class="btn btn-primary btn-lg">Lihat Postingan</a>
    </div>
</div>

<?php include '../app/views/templates/footer.php'; ?>