<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- css/bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="icon"
            href="data:image/jpeg;base64,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"
            type="image/x-icon">
        <title><?php echo $title; ?></title>
    </head>

    <body>

        <!-- Header -->
        <header>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg bg-body-secondary shadow">
                <div class="container">
                    <a href="" class="navbar-brand" style="margin-left: 200px;">Library</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 120px;">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <!-- Nav Home -->
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page"
                                    href="<?php echo site_url('Welcome'); ?>" style="font-size: 72%;"><b>Home</b></a>
                            </li>

                            <!-- Nav-dropdown pinjman -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-uppercase" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 72%;">
                                    <b>Pinjaman</b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="<?php echo site_url('Welcome/pinjaman') ?>">Buku</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

        </header>
        <!-- END HEADER -->

        <!--SECTION  -->
        <section>
            <?php echo $section; ?>
        </section>
        <!-- END SECTION -->

        <!-- js/bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>


</html>