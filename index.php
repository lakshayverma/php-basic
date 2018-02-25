<?php
    $nav_only = true;
    $page_title = "Welcome";
    include './layouts/header.php';
?>
    <!-- Page Content -->
    <div class="container-fluid">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8 site_logo">
                <img class="img-responsive img-rounded" src="./dependencies/images/wall.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>
                    <?php echo DEVELOPER_NAME; ?>
                </h1>
                <p>
                    <?php echo SITE_TITLE; ?> my own personal project. Created from scratch. Made with
                    <span class="glyphicon glyphicon-heart"></span> in Jalandhar.
                </p>
                <?php
                if ($session->is_logged_in()) {
                    ?>
                <a class="btn btn-primary btn-lg" href="./view_event.php">Get Started</a>
                <?php
                } else {
                    ?>
                    <a class="btn btn-primary btn-lg" href="./login.php">Get Started</a>
            <?php
                }
                ?>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <?php echo SITE_MOTO; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include './layouts/footer.php'; ?>
