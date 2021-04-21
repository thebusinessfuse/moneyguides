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


    <div class="container-fluid" id="card" style="padding: 25px; background-color: #ffeaa7;
background-image: linear-gradient(315deg, #ffeaa7 0%, #000000 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/recurrent.png" alt="" width="80%">

                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= --><br>
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Recurring Deposit</span></h4>

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
        <h4>Recurring Deposit</h4>
        <p>A Recurring Deposit is similar to an SIP (Systematic Investment Plan), in a mutual fund. You want to invest
            in a fixed deposit but do not have sufficient money to do so. A recurring deposit is similar to a fixed
            deposit, only you invest small
            sums of money regularly which earns an interest equal to a fixed deposit. You will have to first open a
            savings bank account in your bank. You deposit money into this savings bank account. A fixed sum of money is
            deducted regularly (say
            each month), from your savings bank account and transferred to your recurring deposit. </p>
        <br>
        <div id="card"
            style="background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5 class="text-center text-white"><b>Why invest in Recurring Deposit Account?</b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>You can start small</b></h6>
                            <p>Find investing a large amount in fixed deposit difficult? Invest small sums of money and
                                earn interest at the same rate as a fixed deposit.</p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Rate of interest in fixed</b></h6>
                            <p>The rate of interest is fixed when you invest in a recurring deposit. You are insulated
                                from a swing in the interest rates. </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Forced Saving</b></h6>
                            <p>You invest a fixed amount of money and can withdraw your money, only after a certain
                                fixed time. You are forced to save. </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Plan your goals </b></h6>
                            <p>You can set money aside for short-term goals such as marriage expenses, buying a car or
                                even going on a holiday. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>
        <!--==============first card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>Eligibility for Recurring Deposit Account</h5>
            <p>If you are a resident of India, you can open a Recurring Deposit Account. A recurring deposit at a bank
                can be opened with an amount as less as INR 100 a month. Some private banks require you to make a
                recurring deposit of at least INR
                500 a month.</p>
            <h5>What is the tenure of your Recurring Deposit? </h5>
            <p>The tenure of Recurring Deposit is a maximum of 10 years. It would be a good idea to invest your money in
                a recurring which matches your financial goals. </p>
            <h5>Interest on your Recurring Deposit </h5>
            <p>Many recurring deposits pay an interest rate of 8.5-8.7% a year. This interest rate can go as high as
                9-9.2% a year for a recurring deposit, if you make a deposit of 1-5 years. </p>
            <h5></h5>
        </div>
        <br>
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>How to apply?</h5>
            <ul>
                <li>You can apply for a recurring deposit account at your nearest bank branch. You have to fill the
                    application form and submit the relevant documents.
                </li>
                <li>You require proof of identity and address: passport/driving license/voter’s identity card/PAN
                    card/ration card/recent utility bills/credit card bill. This is necessary for the KYC (Know Your
                    Customer), procedure.
                </li>
            </ul>
        </div>
    </div>
</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>