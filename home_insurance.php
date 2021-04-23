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
    box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2);
    -ms-transform: scale(1.1);
    /* IE 9 */
    -webkit-transform: scale(1.1);
    /* Safari 3-8 */
    transform: scale(1.1);
}

.container {
    padding: 2px 16px;
}
</style>
<?php include 'header.php'; ?>
<main id="main">


    <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/homins.png" alt="" width="50%">
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br> Home
                                Insurance Plan</span></h4>

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

                    <!-- End Contact Section -->

                </div>
            </div>

        </div>

        <!-- card for test -->
    </div>
    </section><br>
    <!-- End Breadcrumbs Section -->
    <!--content section-->


    <div class="text-center">
        <h4 class="spanals"><b>Home Insurance</b></h4>
    </div>
    <div style="padding:20px;   background: linear-gradient(to right, #98b7b8, #debd78);">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <h5><b>WhyHome Insurance?</b></h5>
                    <ul>
                        <li>The insurer bears the risk of damage and destruction to the structure of your house and
                            compensates
                            you for
                            this loss.</li>
                        <li>You have to pay a premium for the benefit.</li>
                        <li>Based on the premium you pay the structure of
                            your
                            house is insured for an amount
                            called sum assured.</li>
                        <li>You can also insure the contents of your house with home content insurance under
                            a
                            householder’s package policy.</li>
                        <li>If you stay in a rented house you can avail only home content
                            insurance and
                            not home insurance for the
                            structure.</li>

                    </ul>

                </div>
                <div class="col-sm-6 text-center">
                    <img src="img/homins.png" alt=" " width="40%;">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!--=======================Card content==========================-->
    <div class="container">
        <div id="card"
            style=" background-color: #63d471;
            background-image: linear-gradient(315deg, #7dac82 0%, #5c6f8d 74%); padding: 25px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;"
            data-aos="fade-down">
            <h5 class="text-center text-white"><b>Why buy Home Insurance?</b></h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h5><b>Protects your structure</b></h5>
                            <p>Helps pay for the replacement of the structure of your home, if damaged in a natural or
                                manmade calamity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container" data-aos="zoom-in"><br>
                            <h5><b>Protects your contents</b></h5>
                            <p>A householder’s package policy, compensates you against damage and loss of the contents
                                of
                                your home.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h5><b>Special benefits</b></h5>
                            <p>You can avail special cover for jewelry and precious items in your home. Alternate
                                accommodation if your home is under repair.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h5><b>Minimum It is very cheap</b></h5>
                            <p>It can be very costly to repair the damage to the structure of your home. The premiums on
                                home insurance are a pittance compared to this loss.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <h3 class="text-center"><b>Key factors to consider for Home Insurance</b></h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h6><b>Take a basic fire and allied perils insurance policy</b></h6>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Lightening</li>
                            <li>Hit by an aircraft</li>
                            <li>Damaged in an explosion</li>
                            <li>Fire</li>
                            <li>Flood</li>
                            <li>Deliberately set on fire (arson and malicious intent).</li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h6><b>Householder’s package policy</b></h6>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>A much better home insurance policy for you is s a householder’s package policy. You
                                have to pay a
                                higher
                                premium than a fire and allied perils policy. You are covered for damages suffered to
                                the structure
                                of your
                                home by fire and
                                allied perils.
                            </li>
                            <li>You are also provided a cover for the contents for your home (Furniture, electronic
                                items, jewelry,
                                art)
                                destroyed by a fire and allied perils, theft or burglary and mechanical and electrical
                                breakdowns.
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h6><b>How does a home insurance policy pay you for damages?</b></h6>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <ul>
                            <li>You live in a posh area in a metro city. You have availed a comprehensive home insurance
                                policy
                                popularly
                                called HPP (Householder’s Package Policy). Unfortunately due to a flood the wall of your
                                house is
                                severely
                                damaged. So how the
                                insurer does compensates you for the loss?
                            </li>
                            <li>In a home insurance policy you are compensated only for the repair/reconstruction of the
                                structure
                                of your
                                house.
                            </li>
                            <li>The insurer is not concerned with the location of your home. It can be in a posh area or
                                a cheaper
                                area. The
                                insurer considers the cost of replacing the structure of your house and is not concerned
                                with the
                                location
                                of your home.
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        <h6><b>How does the insurer calculate the value of your house?</b></h6>

                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>The insurer calculates the cost of the damaged structure of your home on the market
                                value basis. The
                                market
                                value basis is the actual cost of the structure of your house (say the cost of the wall
                                of your
                                house)
                                damaged in the flood.
                            </li>
                            <li>The insurer accounts for depreciation (wear and tear of the wall with age).
                            </li>
                            <li>You are given the difference of the cost of the asset (wall of the house) minus
                                depreciation
                                (determined at
                                a fixed value).
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <h6><b>How is your claim settled in home content insurance?</b></h6>

                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Costly electronic gadgets of your house or furniture are destroyed in a fire/short
                                circuit. Are you
                                given a
                                new electronic gadget or furniture set to replace your loss? No, the value of the asset
                                (Furniture
                                or the
                                electronic gadget)
                                is given to you after accounting for depreciation.
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingsix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">

                        <h6><b>Standard Fire and Allied Perils Insurance:</b></h6>

                    </button>
                </h2>
                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>This insurance covers most kind of damage caused to the house due to a fire, riot,
                                floods or even a
                                storm.
                            </li>

                        </ul>

                        <h6><b>Burglary and House breaking insurance policy:</b></h6>
                        <ul>
                            <li>Covers loss of assets due to a burglary.

                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div><br><br>
</main>
<!-- End #main -->

<?php include 'footer.php'; ?>