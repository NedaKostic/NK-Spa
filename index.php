<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NK Luxury Spa experience -  escape from everything, unwind in the serene massage rooms and relaxation areas, rejuvenate with spa rituals, beauty treatments.">
    <meta name="keywords" content="Spa, Pool, Sauna, Relaxing, Massage, Beauty, Body treatments, Face treatments">
    <meta name="author" content="Neda Kostic">
    <link rel="icon" href="favicon.ico">
    <title>NK LUXURY SPA</title>

    <!--------------- Bootstrap ---------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!------------ CSS Custom File -------------->
    <link rel="stylesheet" href="assets/css/style.css">

    <!------------------ AOS -------------------->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
    <!--------------------- PRELOADER ---------------------->
    <div class="preloader">
        <div class="loading"></div>
    </div>

    <!--------------------- NAVIGATION ---------------------->
    <nav class="navbar navbar-expand-lg shadow-lg sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#hero">
                <img class="logo ms-lg-5" src="assets/images/logo.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa fa-bars" style="color:#b1824a"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-lg-5">
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" href="#services">Services</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" href="#pricelist">Price list</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav> 

    <main>

        <!--------------------- HERO ---------------------->
        <div class="hero" id="hero">
            <div class="video-wrapper">
                <video autoplay="" loop="" muted="" class="custom-video" poster="assets/videos/video-poster.jpg">
                    <source src="assets/videos/video1.mp4" type="video/mp4">
                </video>
            </div>

            <div class="hero-text">
                <h1 class="mb-lg-4 fw-bold"> NK Luxury Spa Experience</h1>
                <p class="fw-bold">A wonderful place to be</p>
            </div>
            <div class="overlay"></div>
        </div>


        <!--------------------- ABOUT SECTION ---------------------->
        <section class="about" id="about">
            <div class="container pb-lg-5">
                <div class="row">
                    <div class="custom-border col-lg-6 mt-lg-4 text-center text-sm-start">
                        <h2 class="mb-4" data-aos="fade-right">Welcome</h2>
                        <h4 class="mb-4" data-aos="fade-right" data-aos-delay="300">NK Luxury Spa Experience</h4>
                        <p class="me-md-4" data-aos="fade-right" data-aos-delay="600">Step into spa paradise and discover the
                            source of beauty. With a unique design and spacious ambience, the Spa centre is a place of
                            peace and tranquillity that caters to all your beauty and health needs with superior
                            service. Escape from everything, unwind in the serene massage rooms and relaxation areas,
                            rejuvenate with spa rituals, beauty treatments at NK Luxury Spa.
                        </p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 text-center text-sm-start">
                        <p class="mt-2 mb-5 ms-lg-5" data-aos="fade-right" data-aos-delay="1000"> 
                            <i class="fas fa-spa custom-i"></i><span>1400m² of indoor spa & relaxing area</span>
                        </p>
                        <p class="mb-5 ms-lg-5" data-aos="fade-right" data-aos-delay="1200">
                            <i class="fas fa-swimming-pool"></i><span>30°C Water temperature in the pool</span>     
                        </p>
                        <p class="mb-5 ms-lg-5" data-aos="fade-right" data-aos-delay="1400">
                            <i class="fas fa-coffee"></i><span>Cafe bar with serve on pool facilities</span>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!--------------------- SERVICES SECTION ---------------------->
        <section class="services" id="services">
            <div class="container pb-lg-5">
                <h2 data-aos="fade-right" class="mb-5 text-center">Services</h2>

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="400">
                        <div class="card h-100">
                            <img src="assets/images/card-01.jpg" class="card-img-top" alt="card-01">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Central Pool</h5>
                                <p class="card-text"> Located in the center of the spacious spa area, the pool is available to members and guests of our Spa center with their day-use vouchers. </p>
                                <p> The pool is 10 meters long, 4 meters wide and its equipment enables swimmers to swim against the stream.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="600">
                        <div class="card h-100">
                            <img src="assets/images/card-02.jpg" class="card-img-top" alt="card-02">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Small Pool</h5>
                                <p class="card-text"> Located in the hidden area of the spa area, the pool is available to members only. </p>
                                <p> The lighting and atmosphere that surround the pool are specially designed to provide you with maximum relaxation, away from everyday life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="800">
                        <div class="card h-100">
                            <img src="assets/images/card-03.jpg" class="card-img-top" alt="card-03">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Jaccuzzi</h5>
                                <p class="card-text"> Combining the energy of water, air, and underwater lights, our Jaccuzzi is a feast for all the senses. <br>
                                    Designed for comfortable relaxation for a maximum of four people, it is equipped with hydro and air jets and is one of the most popular and
                                    simpliest forms of relaxation in NK Spa.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="400">
                        <div class="card h-100">
                            <img src="assets/images/card-04.jpg" class="card-img-top" alt="card-04">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Finnish Sauna</h5>

                                <p class="card-text"> The Finnish sauna is a dry sauna with a temperature of 90˚C and low humidity (10-15%). <br>
                                    Staying in the sauna improves blood circulation, relaxes muscles, makes skin glow, and provides better skin tone and elasticity. </p>
                                <p>
                                    It is designed to provide each member with absolute relaxation while depriving the body of toxins and recovering.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="600">
                        <div class="card h-100">
                            <img src="assets/images/card-05.jpg" class="card-img-top" alt="card-05">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Steam Bath</h5>
                                <p class="card-text"> A Steam bath is a room where relaxation becomes your only goal. Steam or Turkish bath is a type of sauna in which the air is saturated with moisture and the temperature reaches 42°C and is completely created to provide relaxation and a healthy body.</p>
                                <p>
                                    Our steam bath is the perfect choice for relaxation after a stressful day or complete detoxification of your body.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="800">
                        <div class="card h-100">
                            <img src="assets/images/card-06.jpg" class="card-img-top" alt="card-06">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Tepidarium</h5>
                                <p class="card-text"> Tepidarium is heated slightly above the average human body temperature (37-39°C). Heated and anatomically shaped stone bearings have a beneficial effect on tense back muscles. <br> As the result of the use of tepidarium, the body emits the same temperature it receives from heated beds, and the use of energy remains minimal – this way, the body is heated, but is not sweaty, which has a beneficial effect on the whole body and returns it to the balance.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="400">
                        <div class="card h-100">
                            <img src="assets/images/card-07.jpg" class="card-img-top" alt="card-07">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Massages</h5>
                                <p class="card-text">
                                    At NK Spa, we provide a wide variety of different massages. Through these indulgent treatments we can take you on a journey around the world, employing a wide variety of techniques and movements. </p>
                                <p> If you prefer a more customised luxury experience, a massage therapist will be happy to work with you and create a treatment tailored to your relaxation goals. So sit back and let our massage therapy sweep you away from the stresses of everyday life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="600">
                        <div class="card h-100">
                            <img src="assets/images/card-08.jpg" class="card-img-top" alt="card-08">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Body and Facial Treatment</h5>
                                <p class="card-text">
                                    By browsing our wide variety of luxurious treatments, you are sure to find the perfect treatment to suit your needs and skin type, or to simply help you relax and feel the benefits of healthy body and skin. These treatments relax your muscles and increase blood circulation.</p>
                                <p> A facial massage will also help boost collagen production, which will diminish skin sagging and reduce wrinkles or fine lines. You will be left with glowing, refreshed skin that is bright and rejuvinated.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4" data-aos="fade-right" data-aos-delay="800">
                        <div class="card h-100">
                            <img src="assets/images/card-09.jpg" class="card-img-top" alt="card-09">
                            <div class="card-body">
                                <h5 class="card-title mb-3">NK Cafe Bar</h5>
                                <p class="card-text"> NK cafe bar is a place for rest and relaxation with possibility to serve our delicious coffee or fresh juices by the pool. From organic and local special herbal teas to fresh fruit and vegetable juices and smoothies, our bar offers a variety of drinks that will boost your metabolism and detox your body. </p>
                                <p>Relax in a unique space for members: enjoy moments of respite with daily and weekly press, wi-fi internet and conversations with loved ones. A pleasant atmosphere will help you regain your energy. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--------------------- PRICE LIST SECTION ---------------------->
        <section class="pricelist" id="pricelist">
            <div class="container pb-lg-5">
                <h2 data-aos="fade-right" class="mb-5 text-center">Price list</h2>

                <div class="row mt-5" data-aos="fade-right" data-aos-delay="400">
                    <div class="col-lg-12 nav-fill mb-4">
                        <ul class="nav nav-pills" id="pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#content-member">Membership & Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content-spa">Spa zone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content-massage">Massages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content-body">Body & Facial Treatments</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="tab-content" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800">

                    <div class="tab-pane fade show active" id="content-member" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row">
                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Spa Package/1y</p><span>$1000</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Spa Package/6m</p><span>$620</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Weekend Package/1m</p><span>$320</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Month Package/1m</p><span>$280</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>One Day</p><span>$60</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Spa Day Packages</p><span>on request</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Couple's Packages</p><span>on request</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Party Packages</p><span>on request</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="content-spa" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Central pool/1h</p><span>$25</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Jaccuzzi/1h</p><span>$40</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Sauna/1h</p><span>$30</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Steam Bath/1h</p><span>$30</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Tepidarium/1h</p><span>$30</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Spa zone all included/2h</p><span>$90</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="content-massage" role="tabpanel">
                        <div class="row">

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>NK Signature</p><span>on request</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Hot Stone/1h</p><span>$90</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Antistress/1h</p><span>$80</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Couples/50min</p><span>$120</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Couples/80min</p><span>$160</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Relax/50min</p><span>$50</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Relax/80min</p><span>$80</span>
                                </div>
                            </div>


                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Therapeutic/30min</p><span>$30</span>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="tab-pane" id="content-body" role="tabpanel">
                        <div class="row">

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Choco Sensation</p><span>$75</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Coconut Sweet Dreams</p><span>$65</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>NK Detox Facial/1h</p><span>$50</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Face Vitamin Cocktail/1h</p><span>$40</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Maderotherapy/1h</p><span>$40</span>
                                </div>
                            </div>

                            <div class="col-lg-6 pricelist-item">
                                <div class="pricelist-content">
                                    <p>Maderotherapy/x10</p><span>$360</span>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </section>



        <!--------------------- GALLERY SECTION ---------------------->
        <section class="gallery" id="gallery">
            <div class="container pb-lg-5">
                <h2 data-aos="fade-right" class="mb-5 text-center">Gallery</h2>
                <div class="row" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">

                    <?php
                    $images = glob("assets/images/gallery/*.jpg");
                    sort($images, SORT_NATURAL | SORT_FLAG_CASE);
                    $split = array_chunk($images, 2);

                    foreach ($split as $div) {
                        echo  "<div class='col-lg-4 col-md-12 mb-3 mb-lg-0'>";

                        foreach ($div as $img) {
                            echo "<img src='$img' class='rounded mb-4 img-fluid' alt='#'>";
                        }
                        echo '</div>';
                    }
                    ?>


                </div>
            </div>
        </section>


        <!--------------------- Contact section ---------------------->
        <section class="contact" id="contact">
            <div class="container">
                <div class="row">

                    <!-- Contact info -->
                    <div class="col-md-6 col-12 text-center text-md-start mb-5">
                        <h2 class="mb-5" data-aos="fade-right">Contact us</h2>

                        <div data-aos="fade-right" data-aos-delay="300">
                            <h5 class="mt-5">Address</h5>
                            <p>King's Road 34, London</p>

                            <h5 class="mt-5">Opening hours</h5>
                            <p>8am - 8pm Monday to Sunday <br>
                                ~ Including Public holidays</p>

                            <h5 class="mt-5">Phone</h5>
                            <p>+44 11 2233 4567<br>
                                +44 75 5555 4567</p>


                            <h5 class="mt-5">Email</h5>
                            <p>info@nkspa.com<br>
                                customerservice@nkspa.com</p>

                            <h5 class="mt-5 mb-3">Social Media</h5>
                            <div class="mb-3">
                                <a href="#"><i class="fab fa-facebook-square me-1"></i></a>
                                <a href="#"><i class="fab fa-instagram me-1"></i></a>
                                <a href="#"><i class="fab fa-youtube-square"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Form-->
                    <div class="col-md-6 col-12">

                        <h2 class="mb-5 text-center text-md-start" data-aos="fade-right" data-aos-delay="600">Don't be shy, write to us</h2>

                        <form method="post" id="contact-form" class="contact-form" data-aos="fade-right" data-aos-delay="800">

                            <div class="row">

                                <div class="col-lg-6 col-6 mb-3">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>

                                <div class="col-lg-6 col-6 mb-3">
                                    <label for="lastname" class="form-label">Last name <sup class="text-danger">*</sup></label>
                                    <input type="lastname" name="lastname" id="lastname" class="form-control">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>


                                <div class="col-12 mb-3">
                                    <label for="subject" class="form-label">Subject <sup class="text-danger">*</sup></label>
                                    <input type="subject" name="subject" id="subject" class="form-control">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="message" class="form-label">How can we help?<sup class="text-danger">*</sup></label>
                                    <textarea name="message" rows="6" class="form-control" id="message"></textarea>
                                </div>

                                <div class="col-lg-5 col-12 mt-5">
                                    <input type="button" id="send-message" class="form-control" value="Send Message">
                                </div>
                            </div>

                            <div id="status-message" class="mt-5"></div>
                        </form>
                    </div>


                </div>
            </div>
        </section>

    </main>

    <!-------------------- Back TO TOP BUTTON ------- --------->
    <button type="button" class="btn btn-outline-warning btn-sm" id="btn-back-to-top">
        <i class="fas fa-hand-pointer"></i>
    </button>


    <footer class="footer text-center py-4 shadow-lg">
        <div class="container">
            <p>Copyright &copy; Neda Kostic | Design by <a href="https://nedakostic.github.io" target="_blank">Neda Kostic</a></p>
        </div>
    </footer>

    <!---------------- Font Awesome ---------------------->
    <script src="https://kit.fontawesome.com/ff8c852e02.js" crossorigin="anonymous"></script>

    <!---------------------- JQuery ---------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!---------------------- AOS ---------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--------------------- Bootstrap -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-------------- Custom JavaScript Files -------------->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/contact.js"></script>


</body>
</html>