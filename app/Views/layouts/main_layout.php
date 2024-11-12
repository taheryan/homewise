<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection("title") ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Vazir', sans-serif;
            direction: rtl;
        }

        .carousel-inner img {
            width: 100%;
            height: 500px;
        }

        .services-section {
            padding: 40px 0;
            background-color: #f8f9fa;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .footer a {
            color: #fff;
        }
    </style>

</head>

<body>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">مشاور املاک امیر</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اجاره‌ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">فروش ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection("slider") ?>
    <?= $this->renderSection("content") ?>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>تماس با ما</h5>
                    <ul>
                        <li><a href="#">ایمیل: example@email.com</a></li>
                        <li><a href="#">تلفن: 123-456-789</a></li>
                        <li><a href="#">آدرس: تهران، ایران</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>آخرین اخبار</h5>
                    <ul>
                        <li><a href="#">خبر 1</a></li>
                        <li><a href="#">خبر 2</a></li>
                        <li><a href="#">خبر 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>