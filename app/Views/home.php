<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('title') ?>
خانه
<?= $this->endSection() ?>

<?= $this->section('slider') ?>



<!-- Slideshow (Carousel) -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://tjh.com/wp-content/uploads/2023/06/TJH_HERO_TJH-HOME@2x-1-1536x1021.webp" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.brookfieldresidential.net/-/media/brp/global/modules/news-and-blog/corporate/hidden-costs-of-new-build-home/mosaic-plan-5-exterior-at-barefoot-lakes-by-brookfield-residential-in-firestone-co-1189.jpg?rev=96a37f1155f143f0b8279981f15d1afd&cx=0.5&cy=0.5" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="https://www.bankrate.com/2019/10/11115713/GettyImages-595504906.jpg?auto=webp&optimize=high&crop=16:9" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">قبلی</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">بعدی</span>
    </button>
</div>

<?= $this->endSection() ?>



<?= $this->section("content") ?>


<!-- Rental Homes Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">جدیترین خانه‌های اجاره‌ای</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Rental 1">
                <div class="card-body">
                    <h5 class="card-title">خانه اجاره‌ای 1</h5>
                    <p class="card-text">توضیحاتی در مورد خانه اجاره‌ای 1.</p>
                    <a href="#" class="btn btn-primary">مشاهده بیشتر</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Rental 2">
                <div class="card-body">
                    <h5 class="card-title">خانه اجاره‌ای 2</h5>
                    <p class="card-text">توضیحاتی در مورد خانه اجاره‌ای 2.</p>
                    <a href="#" class="btn btn-primary">مشاهده بیشتر</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Rental 3">
                <div class="card-body">
                    <h5 class="card-title">خانه اجاره‌ای 3</h5>
                    <p class="card-text">توضیحاتی در مورد خانه اجاره‌ای 3.</p>
                    <a href="#" class="btn btn-primary">مشاهده بیشتر</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">خدمات ما</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">خدمات 1</h5>
                        <p class="card-text">توضیحات خدمات 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">خدمات 2</h5>
                        <p class="card-text">توضیحات خدمات 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">خدمات 3</h5>
                        <p class="card-text">توضیحات خدمات 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>