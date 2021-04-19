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


    <div class="container" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/homins.png" alt="" width="100%">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-weight: bold;"><span style="color: aquamarine;">Send Message
                            Home Insurance</span></h3>
                    <p style="color: white;">Get insured from the comfort of your home</p>
                    <!-- ======= Contact Section ======= -->
                    <section id="contact">
                        <div class="container" data-aos="fade-up">
                            <div class="container">
                                <div class="form">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-6">

                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="tel" class="form-control" name="message"
                                                placeholder="Phone Number" required></input>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control rounded border-dark" rows="2" id="comment"
                                                placeholder="Massage"></textarea>
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
        <h3>Home Insurance</h3>
        <p>The insurer bears the risk of damage and destruction to the structure of your house and compensates you for
            this loss. You have to pay a premium for the benefit. Based on the premium you pay the structure of your
            house is insured for an amount
            called sum assured. You can also insure the contents of your house with home content insurance under a
            householder’s package policy. If you stay in a rented house you can avail only home content insurance and
            not home insurance for the
            structure.
        </p>


        <hr>

        <h2>Why buy Home Insurance?</h2>
        <!--=======================Card content==========================-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card">

                    <div class="container">
                        <h4><b>Protects your structure</b></h4>
                        <p>Helps pay for the replacement of the structure of your home, if damaged in a natural or
                            manmade calamity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">

                    <div class="container">
                        <h4><b>Protects your contents</b></h4>
                        <p>A householder’s package policy, compensates you against damage and loss of the contents of
                            your home.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">

                    <div class="container">
                        <h4><b>Special benefits</b></h4>
                        <p>You can avail special cover for jewelry and precious items in your home. Alternate
                            accommodation if your home is under repair.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">

                    <div class="container">
                        <h4><b>Minimum It is very cheap</b></h4>
                        <p>It can be very costly to repair the damage to the structure of your home. The premiums on
                            home insurance are a pittance compared to this loss.
                        </p>
                    </div>
                </div>
            </div>
        </div><br>



        <h2 class="text-center">Key factors to consider for Home Insurance</h2>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>Take a basic fire and allied perils insurance policy</h3>
            <ul>
                <li>Lightening</li>
                <li>Hit by an aircraft</li>
                <li>Damaged in an explosion</li>
                <li>Fire</li>
                <li>Flood</li>
                <li>Deliberately set on fire (arson and malicious intent).</li>
            </ul>
        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>Householder’s package policy</h3>

            <ul>
                <li>A much better home insurance policy for you is s a householder’s package policy. You have to pay a
                    higher
                    premium than a fire and allied perils policy. You are covered for damages suffered to the structure
                    of your
                    home by fire and
                    allied perils.
                </li>
                <li>You are also provided a cover for the contents for your home (Furniture, electronic items, jewelry,
                    art)
                    destroyed by a fire and allied perils, theft or burglary and mechanical and electrical breakdowns.
                </li>
            </ul>

        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>How does a home insurance policy pay you for damages?</h3>
            <ul>
                <li>You live in a posh area in a metro city. You have availed a comprehensive home insurance policy
                    popularly
                    called HPP (Householder’s Package Policy). Unfortunately due to a flood the wall of your house is
                    severely
                    damaged. So how the
                    insurer does compensates you for the loss?
                </li>
                <li>In a home insurance policy you are compensated only for the repair/reconstruction of the structure
                    of your
                    house.
                </li>
                <li>The insurer is not concerned with the location of your home. It can be in a posh area or a cheaper
                    area. The
                    insurer considers the cost of replacing the structure of your house and is not concerned with the
                    location
                    of your home.
                </li>
            </ul>
        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>How does the insurer calculate the value of your house?</h3>
            <ul>
                <li>The insurer calculates the cost of the damaged structure of your home on the market value basis. The
                    market
                    value basis is the actual cost of the structure of your house (say the cost of the wall of your
                    house)
                    damaged in the flood.
                </li>
                <li>The insurer accounts for depreciation (wear and tear of the wall with age).
                </li>
                <li>You are given the difference of the cost of the asset (wall of the house) minus depreciation
                    (determined at
                    a fixed value).
                </li>
            </ul>
        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>How is your claim settled in home content insurance?</h3>
            <ul>
                <li>Costly electronic gadgets of your house or furniture are destroyed in a fire/short circuit. Are you
                    given a
                    new electronic gadget or furniture set to replace your loss? No, the value of the asset (Furniture
                    or the
                    electronic gadget)
                    is given to you after accounting for depreciation.
            </ul>
        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>Types</h3>
            <h5>Standard Fire and Allied Perils Insurance:</h5>
            <ul>
                <li>This insurance covers most kind of damage caused to the house due to a fire, riot, floods or even a
                    storm.
                </li>

            </ul>

            <h5>Burglary and House breaking insurance policy:</h5>
            <ul>
                <li>Covers loss of assets due to a burglary.

                </li>

            </ul>
        </div>



    </div><br><br>
</main>
<!-- End #main -->

<?php include 'footer.php'; ?>