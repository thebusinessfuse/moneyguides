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


    <!-- End Breadcrumbs Section -->


    <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/public.png" alt="" width="90%">

                    </div>
                </div>
                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= --><br>
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Public Provident Fund</span></h4>

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

    <!--content section-->
    <div class="container">
        <h4>Public Provident Fund </h4>
        <p>You invest your money in a PPF. You get interest on the money; you invest in the Public Provident Fund. On
            maturity of the PPF, you get your principal (money you have invested), back along with interest. You can
            make up to 12 transactions
            a year.
        </p>
        <p><b>Minimum amount:</b> You can invest a minimum amount of INR 500 in a year in a PPF.</p>
        <p><b>Maximum amount:</b>You can invest a maximum amount of INR 1.5 lakhs in a year in a PPF.
        </p>
        <p><b>Lock in: </b>The PPF has a lock in period of 15 years. You can extend your PPF in blocks of 5 years, with
            or without making a further contribution.
        </p>
        <p>If you continue your PPF after 15 years without making any contributions, you can withdraw any amount from
            this account, subject to a single withdrawal a year. If you continue your PPF after 15 years and you make
            contributions (invest money
            into the PPF), then you can withdraw up to 60% of the amount in the PPF account, at the beginning of the 5
            year block.

        </p>
        <br>
        <div id="card"
            style="background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5 class="text-center text-white"><b>Why invest in Public Provident Fund? </b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Safety with returns </b></h6>
                            <p>The investment you make in a PPF is not only safe, but also gives high interest. The
                                interest you get is unmatched among fixed income securities. </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Pledge as Collateral </b></h6>
                            <p>You can pledge the amount in your PPF up to a certain limit and avail a loan. This loan
                                being secured, you pay a lower rate of interest.

                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Tax Benefits </b></h6>
                            <p>You get a tax deduction on the amount you invest in a PPF. You also get an EEE benefit,
                                which signifies a complete tax exemption. </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>In Minor’s name </b></h6>
                            <p>You can open a PPF in the name of your minor child. Helps you save for your child’s
                                education and marriage. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>
        <!--==============first card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>Eligibility for Public Provident Fund </h5>
            <p>You need to be an Indian citizen to invest in the PPF. This account can be opened only in the name of a
                single holder and no joint account is permitted. The account can be opened in the name of a minor, by
                parents or legal guardian. An
                NRI and a HUF is not allowed to open a PPF account. A resident turned NRI is able to invest in the PPF
                account, through NRE/NRO bank accounts till maturity. After the completion of 15 years the amounts can
                be remitted to the host country.
                No extension is permissible for the NRI beyond the 15 year term. The amount is not taxable in India but
                might be taxed in the country of residence.

            </p>
            <h5>How much interest can you get from the PPF?
            </h5>
            <p>The interest on the PPF is calculated on the lowest balance between the 5th and the last day of the
                month. The interest rate payable by the PPF is linked to the Government securities rate.

            </p>
            <h5>PPF enjoys EEE exemptions
            </h5>
            <ul>
                <li>“EEE” means exempt exempt exempt. The PPF enjoys a deduction under Section 80 C of the Income tax
                    act up to INR 1.5 lakhs a year. You can invest a maximum amount of INR 1.5 lakhs a year in a PPF and
                    avail a deduction under Section
                    80 C of the income tax act on the full amount invested.
                </li>
                <li>The money accumulates with time (increase as you get interest on this amount over 15 years) and no
                    tax is charged on this amount. The money you withdraw on maturity is tax free.
                </li>
                <li>PPF has a new name. Riskless and tax less.
                </li>
            </ul>

        </div>
        <br>
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>How to apply?</h5>
            <ul>
                <li>A Public Provident Fund can be opened at any branch of the State Bank of India or its subsidiaries.
                    It can also be opened at any post office and some nationalized banks, which even allow you to open
                    an account outline.

                </li>
                <li>The Public Provident Fund form can be downloaded from the SBI website. A photograph and a PAN card
                    are necessary. An identity and residence proof is must. A passbook is given to you, which has all
                    subscriptions, withdrawals, interest
                    accrued and loans which are recorded.

                </li>
                <li>You need to have identity and address proof as part of the KYC (Know Your Customer), procedure.
                </li>
            </ul>
        </div>
    </div>
</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>