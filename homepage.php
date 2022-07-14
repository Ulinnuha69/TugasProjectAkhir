<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My css -->
    <link rel="stylesheet" href="stylee.css" />
    <!-- My css -->

    <title>homepage</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">TURA_Learn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->
    <div class="header-container">
        <div class="wrapper">
            <header>
                <div class="hero-content">
                    <h1>One Tap Solution</h1>
                    <p>
                        Malu bertanya saat dijalan, Bertanya akan menambah
                        ilmu pengetahuan
                    </p>
                    <a href="#">
                        <form>
                            <input class="search" type="text" placeholder="Mau tanya apa nich ?" required>
                            <input class="button" type="button" value="Cari">
                        </form>
                    </a>
                </div>

                <div class="hero-image">
                    <img src="images/photo.png" alt="ffggghh" width="90%" />
                    <div class="photo-bg"></div>
                </div>
            </header>

            <div class="social-icons">
                <a href="#">
                    <img src="images/fisika-logo.png" alt="" width="50%" />
                </a>
                <a href="#">
                    <img src="images/kimia-logo.png" alt="" width="50%" />
                </a>
                <a href="#">
                    <img src="images/matematika-logo.png" alt="" width="50%" />
                </a>
            </div>
        </div>
    </div>
    <!-- About -->
    <section id="about">
        <div class="container">
            <!-- Content here -->
        </div>
    </section>
    <!-- About -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>