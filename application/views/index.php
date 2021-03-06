<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>assets/user/logo.png" alt="" width="70">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Beranda</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item active" href="<?= base_url('beranda') ?>">Homepage 1</a>
                            <a class="dropdown-item" href="<?= base_url('beranda2') ?>">Homepage 2</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tentang') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kontak') ?>">Contact</a>
                    </li>
                </ul>
                <!-- <div class="ml-auto my-2 my-lg-0">
                    <button class="btn btn-dark rounded-pill">Download Now</button>
                </div> -->
            </div>
        </div>
    </nav>

    <div class="page-hero-section bg-image hero-home-1"
        style="background-image: url(<?= base_url(); ?>assets/user/img/bg_hero_1.svg);">
        <div class="hero-caption pt-5">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 wow fadeInUp">
                        <!-- <div class="badge mb-2"><span class="icon mr-1"><span class="mai-globe"></span></span> #2 Editor
                            Choice App
                            of 2020</div> -->

                        <br>
                        <br>

                        <h1 class="mb-4 text-primary">Baiti Jannati</h1>
                        <div class="text-muted">Merupakan salah satu lembaga sosial
                            kemasyarakatan atau panti asuhan yang memiliki tanggung jawab memberikan
                            kesejahteraan jasmani maupun rohani teruntuk bagi <b>anak yatim, piatu dan dhuafa</b>.
                        </div>
                        <br>
                        <a href="#" class="btn btn-primary rounded-pill">Login</a>
                        <a href="#" class="btn btn-primary rounded-pill">Register</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block wow zoomIn">
                        <div class="img-place  shadow floating-animate">
                            <img src="<?= base_url(); ?>assets/user/img/gambar.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="page-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url(); ?>assets/user/img/clients/alter_sport.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url(); ?>assets/user/img/clients/cleaning_service.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url(); ?>assets/user/img/clients/creative_photo.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
                    <div class="img-place client-img">
                        <img src="<?= base_url(); ?>assets/user/img/clients/global_tv.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End clients -->

    <div class="position-realive bg-image"
        style="background-image: url(<?= base_url(); ?>assets/user/img/pattern_1.svg);">

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 py-3">
                        <div class="img-place wow zoomIn">
                            <img src="<?= base_url(); ?>assets/user/img/gambar2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 mt-lg-5">
                        <h1 class="mb-4 text-primary">Cara Berdonasi</h1>
                        <div class="iconic-list">
                            <div class="iconic-item wow fadeInUp">
                                <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                                    <span class="mai-cube"></span>
                                </div>
                                <div class="iconic-content">

                                    <h5>Powerful Features</h5>
                                    <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod
                                        tempor invidunt ut labore et dolore</p>
                                </div>
                            </div>
                            <div class="iconic-item wow fadeInUp">
                                <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
                                    <span class="mai-shield"></span>
                                </div>
                                <div class="iconic-content">
                                    <h5>Fully Secured</h5>
                                    <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod
                                        tempor invidunt ut labore et dolore</p>
                                </div>
                            </div>
                            <div class="iconic-item wow fadeInUp">
                                <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                                    <span class="mai-desktop-outline"></span>
                                </div>
                                <div class="iconic-content">
                                    <h5>Easy Monitoring</h5>
                                    <p class="fs-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod
                                        tempor invidunt ut labore et dolore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
                        <h1 class="mb-4 text-primary">Sejarah Baiti Jannati</h1>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, molestiae,
                            perspiciatis
                            laboriosam quia placeat recusandae repudiandae corrupti similique delectus, aliquam commodi
                            possimus
                            eveniet optio magnam quis vel. Reiciendis, fuga excepturi.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill">How it works</a>
                    </div>
                    <div class="col-lg-5 py-3">
                        <div class="img-place img-thumbnail   shadow wow zoomIn">
                            <img src="<?= base_url(); ?>assets/user/img/anak_yatim.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="page-section bg-dark fg-white">
        <div class="container">
            <h1 class="text-center">Why Choose Mobster</h1>

            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/rocket.svg" alt="">
                        </div>
                        <p class="fs-large">Very Fast</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="200ms">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/testimony.svg" alt="">
                        </div>
                        <p class="fs-large">Happy Client</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="400ms">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/promotion.svg" alt="">
                        </div>
                        <p class="fs-large">Free Ads</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/coins.svg" alt="">
                        </div>
                        <p class="fs-large">Save Money</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="800ms">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/support.svg" alt="">
                        </div>
                        <p class="fs-large">24/7 Support</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="1000ms">
                        <div class="mb-3">
                            <img src="<?= base_url(); ?>assets/user/img/icons/laptop.svg" alt="">
                        </div>
                        <p class="fs-large">Full Features</p>
                        <p class="fs-small fg-grey">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section bg-image" style="background-image: url(<?= base_url(); ?>assets/user/img/pattern_2.svg);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
                    <h1 class="mb-4">Pricing Plan</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores inventore maxime
                        ipsa
                        eligendi quibusdam velit maiores adipisci odit, exercitationem cumque iusto at debitis
                        reiciendis a, ipsum
                        aliquam reprehenderit. Sed, delectus.</p>
                    <a href="#" class="btn btn-gradient btn-split-icon rounded-pill">
                        <span class="icon mai-call-outline"></span> Custom Plan
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="pricing-table">
                        <div class="pricing-item active wow zoomIn">
                            <div class="pricing-header">
                                <h5>Business Plan</h5>
                                <h1 class="fw-normal">$49.00</h1>
                            </div>
                            <div class="pricing-body">
                                <ul class="theme-list">
                                    <li class="list-item">Push Notification</li>
                                    <li class="list-item">Unlimited Bandwith</li>
                                    <li class="list-item">Realtime Database</li>
                                    <li class="list-item">Monthly Backup</li>
                                    <li class="list-item">24/7 Support</li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Choose Plan</button>
                        </div>
                        <div class="pricing-item wow zoomIn" data-wow-delay="200ms">
                            <div class="pricing-header">
                                <h5>Starter Plan</h5>
                                <h1 class="fw-normal">$24.00</h1>
                            </div>
                            <div class="pricing-body">
                                <ul class="theme-list">
                                    <li class="list-item">Push Notification</li>
                                    <li class="list-item">Unlimited Bandwith</li>
                                    <li class="list-item">Realtime Database</li>
                                    <li class="list-item">Monthly Backup</li>
                                    <li class="list-item">24/7 Support</li>
                                </ul>
                            </div>
                            <button class="btn btn-dark">Choose Plan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section bg-image bg-image-overlay-dark"
        style="background-image: url(<?= base_url(); ?>assets/user/img/gambar_baiti.jpg);">
        <div class="container fg-white">
            <div class="row">
                <div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
                    <h2 class="mb-5 fg-white fw-normal">Customer Stories</h2>
                    <p class="fs-large font-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia
                        voluptates
                        facere explicabo! Rerum necessitatibus cum qui veritatis reprehenderit, neque sapiente
                        consequatur atque
                        eaque molestias, est, quod totam quo laudantium ratione.</p>
                    <p class="fs-large fg-grey fw-medium mb-5">John Doe, UI Designer</p>

                    <a href="#" class="btn btn-outline-light rounded-pill">Read Stories <span
                            class="mai-chevron-forward"></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 py-3 mb-5 mb-lg-0">
                    <div class="img-place w-lg-75 wow zoomIn">
                        <img src="<?= base_url(); ?>assets/user/img/illustration_contact.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 py-3">
                    <h1 class="wow fadeInUp">Need a help? <br>
                        Don't worry just contact us</h1>

                    <form method="POST" class="mt-5">
                        <div class="form-group wow fadeInUp">
                            <label for="name" class="fw-medium fg-grey">Fullname</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="form-group wow fadeInUp">
                            <label for="email" class="fw-medium fg-grey">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>

                        <div class="form-group wow fadeInUp">
                            <label for="message" class="fw-medium fg-grey">Message</label>
                            <textarea rows="6" class="form-control" id="message"></textarea>
                        </div>

                        <div class="form-group mt-4 wow fadeInUp">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</body>