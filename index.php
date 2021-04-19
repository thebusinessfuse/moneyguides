<style>
.anima {
    position: relative;
    animation-name: example;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes sample {
    from {
        top: -30px;
    }

    to {
        top: 50px;
    }
}

.anima2 {
    position: relative;
    animation-name: example;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes example {
    from {
        top: -30px;
    }

    to {
        top: 20px;
    }
}

.buttom-anima {
    position: relative;
    animation-name: button;
    animation-duration: 2s;
    animation-direction: alternate;
    animation-iteration-count: infinite;
}

@keyframes button {
    from {
        top: 100px;
    }

    to {
        top: 20px;
    }
}

@keyframes breath {
    0% {
        background-size: 100% auto;
    }

    50% {
        background-size: 140% auto;
    }

    100% {
        background-size: 100% auto;
    }
}

#zoom {
    width: 100%;
    height: 100%;
    animation: breath 4s linear infinite;
    background: url("assets/img/slide-3.jpg") center no-repeat;
}

/*style for mobile phone */

@media only screen and (max-width: 600px) {
    #zoom {
        animation: breath 4s linear infinite;
        background: url("https://images.pexels.com/photos/4394221/pexels-photo-4394221.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    }
}

/* its for content title and button */

.anima {
    position: relative;
    animation-name: example;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes sample {
    from {
        top: -30px;
    }

    to {
        top: 40px;
    }
}

.anima2 {
    position: relative;
    animation-name: example;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes example {
    from {
        top: -30px;
    }

    to {
        top: 20px;
    }
}

.buttom-anima {
    position: relative;
    animation-name: button;
    animation-duration: 2s;
    animation-direction: alternate;
    animation-iteration-count: infinite;
}

@keyframes button {
    from {
        top: 60px;
    }

    to {
        top: 20px;
    }
}

/* scroll button */

#section10 a {
    padding-top: 60px;
}

#section10 a span {
    position: absolute;
    top: 0;
    left: 50%;
    width: 30px;
    height: 50px;
    margin-left: -15px;
    border: 2px solid #ffffff;
    border-radius: 50px;
    box-sizing: border-box;
}

#section10 a span::before {
    position: absolute;
    top: 10px;
    left: 50%;
    content: '';
    width: 6px;
    height: 6px;
    margin-left: -3px;
    background-color: #ffffff;
    border-radius: 100%;
    -webkit-animation: sdb10 2s infinite;
    animation: sdb10 2s infinite;
    box-sizing: border-box;
}

@-webkit-keyframes sdb10 {
    0% {
        -webkit-transform: translate(0, 0);
        opacity: 0;
    }

    40% {
        opacity: 1;
    }

    80% {
        -webkit-transform: translate(0, 20px);
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@keyframes sdb10 {
    0% {
        transform: translate(0, 0);
        opacity: 0;
    }

    40% {
        opacity: 1;
    }

    80% {
        transform: translate(0, 20px);
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

/* media query  for scroll down*/

@media only screen and (max-width: 600px) {
    .demo a {
        position: absolute;
        margin-top: 0px;
        margin-left: 0rem;
        z-index: 2;
        display: inline-block;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        color: #236b3a;
        font: normal 400 20px/1 'Josefin Sans', sans-serif;
        letter-spacing: .1em;
        text-decoration: none;
        transition: opacity .3s;
    }
}

.demo a {
    position: absolute;
    margin-top: 0px;
    margin-left: 0rem;
    z-index: 2;
    display: inline-block;
    -webkit-transform: translate(0, -50%);
    transform: translate(0, -50%);
    color: #fff;
    font: normal 400 20px/1 'Josefin Sans', sans-serif;
    letter-spacing: .1em;
    text-decoration: none;
    transition: opacity .3s;
}

.demo a:hover {
    opacity: .5;
}
</style>

<?php include 'header.php'; ?>

<!-- ======= Hero Section ======= -->

<div class="intro intro-carousel swiper-container position-relative">
    <div class="swiper-wrapper">
        <div class="swiper-slide carousel-item-a intro-item bg-image" id="zoom">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="intro-body">
                                    <p class="intro-title-top">Home Insurance</p>

                                    <h1 class="intro-title mb-4 anima">
                                        <span class="anima">How safe are
                                            <br> Corporate Fixed Deposit?</span>
                                    </h1>
                                    <p class="intro-subtitle intro-price buttom-anima">
                                    <section id="section10" class="demo">
                                        <a href="#thanks"><span></span></a>
                                    </section>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" id="zoom">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="intro-body">
                                    <p class="intro-title-top">Corporate Fixed Deposit
                                    </p>

                                    <h1 class="intro-title mb-4 anima2">
                                        <span class="anima">How safe are
                                            <br> Corporate Fixed Deposit?</span>
                                    </h1>
                                    <p class="intro-subtitle intro-price buttom-anima">
                                    <section id="section10" class="demo">
                                        <a href="#thanks"><span></span></a>
                                    </section>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url(assets/img/slide-3.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="intro-body">
                                    <p class="intro-title-top">Commodity Exchange</p>

                                    <h1 class="intro-title mb-4 anima2">
                                        <span class="anima">How safe are
                                            <br> Corporate Fixed Deposit?</span>
                                    </h1>

                                    <!-- <p class="intro-subtitle intro-price buttom-anima">
                                            <a href="#"><span class="price-a">Please contact me</span></a>
                                        </p> -->
                                    <p class="intro-subtitle intro-price buttom-anima">
                                    <section id="section10" class="demo">
                                        <a href="#thanks"><span></span></a>
                                    </section>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- End Intro Section -->
<!-- End Hero Section -->

<main id="main">

    <!-- ======= Welcome to Moneyguides ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up" id="thanks">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="https://images.pexels.com/photos/5212338/pexels-photo-5212338.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>Welcome to Moneyguides</h2>
                    <h3>If you’re looking for a financial advisor near your location to help you achieve and maintain
                        financial independence.</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> We are here to help. Our experienced team of
                            professionals with diverse backgrounds takes pride in assisting our clients with their
                            Financial Management needs.</li>
                        <li><i class="bi bi-check-circle"></i> We deliver technical competency, empathy for clients,
                            multi-generational planning, and customized services in the areas of investment management,
                            financial planning, and tax all within a culture
                            of compliance.</li>
                        <li><i class="bi bi-check-circle"></i> Moneyguides have come to a mission exclusively assisting
                            our Financial Partner’s plan the Right Financial Planning for the people efficiently to
                            maintain and implement investment strategy
                            that meets their lifetime financial goals at this digital age.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum
                    fore
                </p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Moneyguide Direct</a></h4>
                        <p class="description">Stop collecting mutual funds & start investing wisely. Though we
                            understand that you can invest on your own, a RIGHT ADVICE can help you reach your goals &
                            also stop you from experimenting with your hard earned money.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Financial Health Check</a></h4>
                        <p class="description">Financial Diagnosis will help you to understand your present financial
                            situation & take corrective actions to meet your financial goals.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="box"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Portfolio Management</a></h4>
                        <p class="description">Get Professional & Unbiased Advice on your existing Investment Portfolio.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="box"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Complete Financial Planning
                            </a></h4>
                        <p class="description">Complete 360 degree analysis of your finances, from budgeting to estate
                            planning , take complete control of your Financial Life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= How It Works Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>How It Works</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/3771110/pexels-photo-3771110.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Register</a></h2>
                        <p>
                            Register for the best suitable service of your choice & make payment.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/5554280/pexels-photo-5554280.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Data Gathering</a></h2>
                        <p>
                            Share information regarding your Goals and requirements through online form.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/58729/pexels-photo-58729.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Risk Profiling</a></h2>
                        <p>
                            Complete your Risk Profiling to enable us to design the right solutions.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/259027/pexels-photo-259027.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Financial Plan</a></h2>
                        <p>
                            We will prepare and share your Financial Plan & explain the same in detail.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Plan Implementation</a></h2>
                        <p>
                            Post answering your queries we will help you implement the Action Plan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col"
                        style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="img">
                            <img src="https://images.pexels.com/photos/920382/pexels-photo-920382.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Mobile App</a></h2>
                        <p>
                            We will register you on our mobile app for tracking and monitoring your goals & investments.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>
<!-- End #main -->

<?php include 'footer.php';?>