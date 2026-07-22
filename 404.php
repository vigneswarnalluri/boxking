<!doctype html>
<html class="no-js" lang="zxx">

    <?php include './partials/head.php'?>

<body>
    <!--==============================
    404 Not Found
    ==============================-->

    <?php $header = true; $breadcrumb = true; include './layouts/layout-top.php'; ?>

    <div class="error-page space text-center">
        <div class="container">
            <div class="title-area mb-30">
                <span class="sub-title"><img src="assets/img/icon/section-subtitle-icon.svg" alt="img"> Page Not Found</span>
                <h1 class="sec-title">404 - We couldn't find that page</h1>
                <p class="sec-text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            </div>
            <div class="btn-group">
                <a href="index.php" class="btn">Back to Home <i class="ri-arrow-right-up-line"></i></a>
            </div>
        </div>
    </div>

    <?php include './layouts/layout-bottom.php'; ?>
</body>

</html>
