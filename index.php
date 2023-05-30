<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolehiyo ng Lungsod ng Dasmariñas</title>

    <?php include('include/header.php'); ?>
</head>

<body>

    <main>
        <!-- Design Header -->
        <?php include('include/index_header.php'); ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href=".">
                    Admission
                </a>

                <a href="admission.php" class="btn custom-btn d-lg-none ms-auto me-4">Apply Now</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="login.php">Sign In</a>
                        </li>
                    </ul>

                    <a href="admission.php" class="btn custom-btn d-lg-block d-none">Apply Now</a>
                </div>
            </div>
        </nav>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="mb-4">Announcements</h2>

                            <h6 class="mt-4">Title</h6>

                            <p class="">Content</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Design Footer -->
    <?php include('include/index_footer.php'); ?>

    <!-- JS Footer -->
    <?php include('include/footer.php'); ?>
</body>

</html>