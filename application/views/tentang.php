<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url(); ?>assets/user/favicon-light.png" alt="" width="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('beranda') ?>">Homepage 1</a>
                            <a class="dropdown-item" href="<?= base_url('beranda2') ?>">Homepage 2</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('tentang') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('berita') ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kontak') ?>">Contact</a>
                    </li>
                </ul>
                <div class="ml-auto my-2 my-lg-0">
                    <button class="btn btn-primary rounded-pill">Download Now</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="bg-light">

        <div class="page-hero-section bg-image hero-mini"
            style="background-image: url(<?= base_url(); ?>assets/user/img/hero_mini.svg);">
            <div class="hero-caption">
                <div class="container fg-white h-100">
                    <div class="row justify-content-center align-items-center text-center h-100">
                        <div class="col-lg-6">
                            <h3 class="mb-4 fw-medium">About Us</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card-page">
                            <h5 class="fg-primary">Stories</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est</p>
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                                gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            </p>

                            <!-- Video -->
                            <div class="text-center py-5">
                                <embed class="embed-video"
                                    src="https://www.youtube.com/embed/k1D0_wFlXgo?list=PLl-K7zZEsYLmnJ_FpMOZgyg6XcIGBu2OX">
                            </div>

                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-page mt-3">
                            <h5 class="fg-primary">Meet Our Teams</h5>
                            <hr>

                            <div class="row justify-content-center">
                                <div class="col-lg-3 py-3">
                                    <div class="team-item">
                                        <div class="team-avatar">
                                            <img src="<?= base_url(); ?>assets/user/img/person/person_1.png" alt="">
                                        </div>
                                        <h5 class="team-name">Sugar Elliot</h5>
                                        <span class="fg-gray fs-small">Creative Director</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 py-3">
                                    <div class="team-item">
                                        <div class="team-avatar">
                                            <img src="<?= base_url(); ?>assets/user/img/person/person_2.png" alt="">
                                        </div>
                                        <h5 class="team-name">John Doe</h5>
                                        <span class="fg-gray fs-small">UI/UX Designer</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 py-3">
                                    <div class="team-item">
                                        <div class="team-avatar">
                                            <img src="<?= base_url(); ?>assets/user/img/person/person_3.png" alt="">
                                        </div>
                                        <h5 class="team-name">Ellysa</h5>
                                        <span class="fg-gray fs-small">Product Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-page mt-3">
                            <h5 class="fg-primary">Partners</h5>
                            <hr>

                            <div
                                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/alter_sport.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/cleaning_service.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/creative_photo.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/global_tv.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/net_sport_tv.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/news_digital_tv.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/spa_beauty.png" alt="">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="img-place client-img">
                                        <img src="<?= base_url(); ?>assets/user/img/clients/trivier_group.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main> <!-- .bg-light -->
</body>