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
        top: 60px;
    }
}

.anima2 {
    position: relative;
    animation-name: example;
    animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes example {
    from {
        top: -30px;
    }

    to {
        top: 30px;
    }
}

.buttom-anima {
    position: relative;
    animation-name: button;
    animation-duration: 1s;
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

/*-------------------------------------------------------------- # why moneyguides--------------------------------------------------------------*/
.services .icon-box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;
}

.services .icon-box::before {
    content: '';
    position: absolute;
    background: #e1f0fa;
    right: -60px;
    top: -40px;
    width: 100px;
    height: 100px;
    border-radius:
        50px;
    transition: all 0.3s;
    z-index: -1;
}

.services .icon-box:hover::before {
    background: #1c2c5a;
    right: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 0px;
}

.services .icon {
    margin: 0 auto 20px auto;
    padding-top: 10px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    background: #236b3a;
    transition: all 0.3s ease-in-out;
}

.services .icon i {
    font-size: 36px;
    line-height: 1;
    color: #fff;
}

.services .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size:
        18px;
}

.services .title a {
    color: #111;
}

.services .description {
    font-size: 15px;
    line-height: 28px;
    margin-bottom: 0;
}

.services .icon-box:hover .title a,
.services .icon-box:hover .description {
    color: #fff;
}

.services .icon-box:hover .icon {
    background: #fff;
}

.services .icon-box:hover .icon i {
    color: #236b3a;
}

/*-------------------------------------------------------------- # More Services --------------------------------------------------------------*/
.more-services {
    padding-top: 20px;
}

.more-services .card {
    border: 0;
    padding: 160px 20px 20px 20px;
    position: relative;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.more-services .card-body {
    z-index: 10;
    background: rgba(255,
            255, 255, 0.9);
    padding: 15px 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    transition: ease-in-out 0.4s;
    border-radius: 5px;
}

.more-services .card-title {
    font-weight: 700;
    text-align: center;
    margin-bottom: 15px;
}

.more-services .card-title a {
    color: #222222;
}

.more-services .card-text {
    color: #5e5e5e;
}

.more-services .read-more a {
    color: #777777;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    transition: 0.4s;
}

.more-services .read-more a:hover {
    text-decoration:
        underline;
}

.more-services .card:hover .card-body {
    background: #3498db;
}

.more-services .card:hover .read-more a,
.more-services .card:hover .card-title,
.more-services .card:hover .card-title a,
.more-services .card:hover .card-text {
    color: #fff;
}



</style>

<link href="style2.css" rel="stylesheet">
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
    <section id="about" style="background-color:;">
        <div class="container" data-aos="fade-up" id="thanks">
        <h2 class="text-center">
            <div class="spanals">
            Welcome to Moneyguides
            </div>
        </h2>
            <div class="row">
            <div class="col-lg-7 content"><br>
                   
                    <h4>If you’re looking for a financial advisor near your location to help you achieve and maintain
                        financial independence.</h4>
                    <ul>
                        <li> We are here to help. Our experienced team of
                            professionals with diverse backgrounds takes pride in assisting our clients with their
                            Financial Management needs.</li>
                        <li>We deliver technical competency, empathy for clients,
                            multi-generational planning, and customized services in the areas of investment management,
                            financial planning, and tax all within a culture
                            of compliance.</li>
                        <li> Moneyguides have come to a mission exclusively assisting
                            our Financial Partner’s plan the Right Financial Planning for the people efficiently to
                            maintain and implement investment strategy
                            that meets their lifetime financial goals at this digital age.</li>
                    </ul>

                </div>
                <div class="col-lg-5 about-img">
                    <img src="img/welcome.png" alt="">
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
    <!-- ======= why moneyguides ======= -->
    <!--oPEN CONTENT     -->
    <div class="content">
        <!--content inner-->
        <div class="content__inner">
            <header class="section-header">
                <h2>How It Works</h2>

            </header>
            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar--><br><br>
                    <div class="row text-center">
                        <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">Register</button>

                                <button class="multisteps-form__progress-btn" type="button" title="Address">Data
                                    Gathering</button>

                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Risk
                                    Profiling</button>

                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Financial
                                    Plan</button>

                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Plan
                                    Implementation</button>

                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Mobile
                                    App</button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-12 m-auto text-center">
                            <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/3771110/pexels-photo-3771110.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        width="100%" class="img-stapper">
                                    <div class="centered">
                                        <h4><b>Register</b></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, a?</p>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/5554280/pexels-photo-5554280.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        width="100%" class="img-stapper">
                                    <div class="centered">
                                        <h4>Data Gathering</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, commodi!
                                        </p>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/58729/pexels-photo-58729.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        width="100%" class="img-stapper">
                                    <div class="centered">
                                        <h4>Risk Profiling</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, quam.</p>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/259027/pexels-photo-259027.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        width="100%" class="img-stapper">
                                    <div class="centered">
                                        <h4>Financial Plan</h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, vel.</p>
                                    </div>
                                </div>

                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                        width="100%" class="img-stapper">
                                    <div class="centered">
                                        <h4>Plan Implementation</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, iusto.</p>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/920382/pexels-photo-920382.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                    <div class="centered">Mobile App</div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ======= why moneyguides ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Why Moneyguides</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </header>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-phone"></i></div>
                        <h4 class="title"><a href="">Mobile App</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-smartwatch"></i></div>
                        <h4 class="title"><a href="">Save Time and Efforts</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Online KYC</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-book-half"></i></div>
                        <h4 class="title"><a href="">Paperless</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
            <i class="bi bi-dice-1"></i>
              <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i class="bi bi-diagram-2"></i>
              <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i class="bi bi-diamond-half"></i>
              <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i class="bi bi-dice-1-fill"></i>
              <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://image.freepik.com/free-vector/powder-holi-paints-frame-border-solated_1441-3793.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://image.freepik.com/free-vector/empty-illuminated-podium-realistic_1441-3744.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://image.freepik.com/free-photo/explosion-colored-powder-white-background_1112-1555.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://image.freepik.com/free-vector/collection-tree-isolated-white-background_64749-96.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
</main>
<!-- End #main -->

<script>
//DOM elements
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};


//remove class from a set of items
const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

};

//return exect parent node of the element
const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

};

//get active button step number
const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

//get active panel
const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

            activePanel = elem;

        }

    });

    return activePanel;
};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {
            elem.classList.add('js-active');
            setFormHeight(elem);

        }
    });
};

//set form height equal to current panel height
const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {

    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList
            .contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
        elem.dataset.animation = newType;
    });
};

//selector onchange - changing animation
const animationSelect = document.querySelector('.pick-animation__select');

animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;

    setAnimationType(newAnimationType);
});

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php include 'footer.php';?>