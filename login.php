<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Employment Tracker</title>

    <!-- Header Imports -->
    <?php require_once('include/header.php') ?>
</head>

<body>
    <!-- Design Header -->
    <?php include('include/index_header.php'); ?>
    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Sign In</h2>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    </div>

                                    <div class="row">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                    </div>


                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <a href="index.php" class="btn btn-danger rounded-pill text-white form-control">Home</a>
                                        <button type="submit" class="form-control">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Design Footer -->
    <?php include('include/index_footer.php'); ?>

    <!-- Footer Imports -->
    <?php require_once('include/footer.php') ?>

    <script>
        $(document).ready(function() {
            // Set Alert Timeout
            setTimeout(function() {
                $('.alert').alert('close');
            }, 7200);
        });
    </script>
</body>

</html>