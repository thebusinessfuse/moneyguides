<style>
#card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: 0.3s;
    width: 100%;
    height: 250px;
    text-align: center;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.container {
    padding: 2px 16px;
}
</style>
<?php include 'header.php'; ?>
<main id="main">

    <!-- <section class="inner-page"> -->
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/truck.png" alt="" width="70%">
                       
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Vehicle
                                Insurance</span></h4>

                        <div class="container" data-aos="fade-up">
                            <div class="container">
                                <div class="form">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-6">

                                                <input type="text" name="name"
                                                    class="rounded border-secondary form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="email" class="form-control rounded border-secondary"
                                                    name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="tel" class="form-control rounded border-secondary"
                                                name="message" placeholder="Phone Number" required></input>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control rounded border-secondary" rows="2"
                                                id="comment" placeholder="Massage"></textarea>
                                        </div>

                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>

                                        <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                </div>

                            </div>
                    </section>
                    <!-- End Contact Section -->

                </div>
            </div>

        </div>

        <!-- card for test -->
    </div>
    </section><br>
    <!-- End Breadcrumbs Section -->
    <!--content section-->

    <div class="container">
        <div class="text-center">
            <h4 class="spanals"><b>Vehicle Insurance</b></h4>
        </div>
        <h5><b>There are thousands of reasons why you should actively protect your car and yourself in india.</b></h5>
        <p>Driving in India is a luxury that thousands of people partake of everyday. It is now quite simple to buy a
            car in the country, and with higher disposable incomes, most households are able to afford more than one car
            too. Having one’s car increases
            one’s mobility and eliminates dependence on public transport. However, driving in India also comes with its
            own perils. We often hear car owners rue traffic indiscipline; lack of legal enforcement by road authorities
            and myriad other complaints
            about that traffic scenario in India. Cases of road accidents and rule – breaking are reported in newspapers
            on a daily basis. Considering these factors, it is important to get car insurance right after one buys a
            car.

        </p>
        <h5><b>We present 5 reasons to get motor insurance in India</b></h5>

        
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p>It pays for damage:</p>

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Not only are cars expensive, paying for their repairs is costly too. Sometimes, your car
                                may be
                                damaged due to someone else’s negligence. A car colliding with yours or you swerving to
                                avoid a
                                jaywalker and crashing into a wall, or
                                even a stray cricket ball cracking your windshield can set you back by a considerable
                                amount of
                                money. However, if you have car insurance, you need not pay for these repairs by
                                yourself.
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p>It reduces your liability:</p>


                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Taking third party liability (TPL) car insurance coverage is mandatory in India. The TPL
                                policy you
                                against the legal ramifications of an accident caused by you. For example, if you happen
                                to cause an
                                accident those results in damages to another person’s
                                property or injuries to another driver/pedestrian, the insurance will pay for their
                                treatment and
                                save you from the legal repercussions of the case.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        <p>It pays for your hospitalization:
                        </p>

                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Not every car owner who suffers an accident is fortunate to get away with a few cuts and
                                bruises.
                                Some accidents result in fractures and other serious injuries that require
                                hospitalization. Instead
                                of shelling out the high hospital and treatment costs
                                from your own pocket, you can get your motor insurance to pay these expenses.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        <p>It costs less when purchases online:
                        </p>

                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Buying motor insurance online results in lower premiums and hence, a cheaper policy.
                                This is because
                                the insurer has lower operating costs when transacting over the internet, and is happy
                                to pass on
                                the component of money saved on paying commission to
                                a broker to the customer. Buying motor insurance online has other advantages, such as
                                renewing the
                                policy in minutes and paying premiums without any paperwork.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">

                        <p>It compensates your family after your demise:
                        </p>

                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                The most unfortunate outcome of a road accident is the car owner’s demise. Once the
                                bread – earning
                                policy holder has passed away, it might become difficult for his or her family to
                                sustain its daily
                                life. However, a motor insurance policy can help to
                                pay the family’s expenses after the unfortunate event.

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

           

        </div>



    </div>
</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>