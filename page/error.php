<?php

require_once('../views/base/header-secondary.php');

?>

<!-- error-page -->

<section id="error-page" class="page-secondary">
    <div class="page-banner" style="background-image: url('../images/bg/services-page-bg.jpg');"></div>
    <div class="container">
        <div class="page-secondary-content">
            <div class="row">
                <div class="col-sm-5">

                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Main</a></li>
                            <li class="breadcrumb-item"><a href="#">404</a></li>
                        </ol>
                    </nav>

                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="error-page-title mb-5">
                        404
                    </h1>

                    <a href="/" class="btn btn--send btn-primary text-white">
                        <div class="btn-icon btn-icon--send"></div>
                        To main
                    </a>
                </div>
            </div>

        </div>
    </div>


</section>

<?php

require_once('../views/base/footer-secondary.php');