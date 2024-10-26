<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Blog</title>

    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    .navbar {
        background-color: #343a40;
        border-bottom: 2px solid #007bff;
    }

    .navbar-brand,
    .nav-link {
        color: #ffffff;
    }

    .navbar-brand:hover,
    .nav-link:hover {
        color: #007bff;
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/blog/public">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/blog/public/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog/public/post">My Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog/public/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>