<?php
session_start();
if (empty($_SESSION['email'])) {
    echo "<script>
            window.location = 'login.php';
    </script>";
    exit();
}
?>
<?php
include 'config.php';
include 'pages/header.php';
include 'pages/sidebar.php';
include 'pages/topright.php';
?>

<style>
    .admin-review-area .card {
        height: 450px;
    }

    .admin-review-area #card1 img {
        height: 200px;
        width: 200px;
    }

    .admin-review-area .card-subtitle .checked {
        color: orange;
    }

    .admin-review-area .card {
        border-radius: 25px;
    }

    .admin-review-area #client-img {
        height: 70px;
        width: 70px;
        border-radius: 45px;
    }
</style>

<!-- Review Section -->
<section class="admin-review-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card" id="card1">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">4.9</h2>
                        <div class="card-subtitle mb-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="card-text mb-3">(30+ Reviews)</p>
                        <h4 class="card-text mb-3">Where Hunger Meets Happiness</h4>
                        <img src="img/logo.png" alt="Logo" />
                    </div>
                </div>
            </div>

            <div class=" col-md-4 col-sm-12">
                <div class="card card-small">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col-6">
                                <h2>4.2</h2>
                            </div>
                            <div class="col-6 text-center">
                                <div class="card-subtitle mb-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <p class="review-text">
                            “Food Express transformed our online food ordering experience with its smooth and
                            user-friendly platform. Order accuracy and delivery efficiency improved, leading to higher
                            customer satisfaction.”
                        </p>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/client-1.png" alt="Sarah K." id="client-img" />
                            </div>
                            <div class="col-8 reviewer-info">
                                <h5>Sarah K.</h5>
                                <p>CEO of SaaSFlow</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-4 col-sm-12">
                <div class="card card-small">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col-6">
                                <h2>5</h2>
                            </div>
                            <div class="col-6 text-center">
                                <div class="card-subtitle mb-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <p class="review-text">
                            “Food Express made online ordering effortless for both our team and customers. The intuitive
                            interface and real-time updates improved overall experience.”
                        </p>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/client-2.png" alt="David R." id="client-img" />
                            </div>
                            <div class="col-8 reviewer-info">
                                <h5>David R.</h5>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-2">
            <div class=" col-md-4 col-sm-12">
                <div class="card card-small">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col-6">
                                <h2>4.0</h2>
                            </div>
                            <div class="col-6 text-center">
                                <div class="card-subtitle mb-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <p class="review-text">
                            “We’ve been using Food Express for a while, and it never disappoints. The ordering process
                            is fast, and the interface is very intuitive. Food quality is consistently great, and
                            deliveries are always timely.
                            The variety of choices makes it easy to cater to everyone’s preferences. Food Express truly
                            enhances the online ordering experience.”
                        </p>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/client-5.jpg" alt="Sarah K." id="client-img" />
                            </div>
                            <div class="col-8 reviewer-info">
                                <h5>Rohi M.</h5>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-4 col-sm-12">
                <div class="card card-small">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col-6">
                                <h2>4.2</h2>
                            </div>
                            <div class="col-6 text-center">
                                <div class="card-subtitle mb-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <p class="review-text">
                            “Ordering through Food Express has been a seamless experience for our team. The interface is
                            clean and user-friendly, allowing us to place orders effortlessly. Updates on order status
                            are prompt, and deliveries arrive on time. Quality and taste are consistently excellent,
                            which keeps our customers happy. Overall, Food
                            Express simplifies food delivery like no other service.”
                        </p>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/client-4.jpg" alt="Sarah K." id="client-img" />
                            </div>
                            <div class="col-8 reviewer-info">
                                <h5>Arah K.</h5>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-4 col-sm-12">
                <div class="card card-small">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col-6">
                                <h2>5</h2>
                            </div>
                            <div class="col-6 text-center">
                                <div class="card-subtitle mb-2">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <p class="review-text">
                            “Food Express is a game-changer for online food ordering. The website is fast, responsive,
                            and very easy to use. Orders are always accurate, and the delivery is quick and reliable.
                            Customer support is friendly and helpful whenever needed. The wide selection of restaurants
                            and cuisines keeps every meal exciting. It truly makes ordering food stress-free and
                            enjoyable.”
                        </p>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/client-6.jpg" alt="David R." id="client-img" />
                            </div>
                            <div class="col-8 reviewer-info">
                                <h5>Jaya S.</h5>
                                <p>Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include 'pages/footer.php'; ?>