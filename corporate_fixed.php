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
    transform: scale(1.1);
}

.container {
    padding: 2px 16px;
}
</style>
<?php include 'header.php'; ?>
<main id="main">
    <!-- <section class="inner-page"> -->
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">
                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/corporate.png" alt="" width="60%">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Corporate Fixed Deposit</span></h4>
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
                                        <div class="form-group my-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="example1">
                                            <label class="custom-control-label" for="customCheck"><small>I have read and
                                                    I agree to the <a href="privacy_policy.php">Privacy
                                                        Policy</a></small> </label>
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
       <div class="text-center"><h4 class="spanals">Corporate Fixed Deposit</h4></div>
        <p>You can make a deposit with a company in a similar way to a bank fixed deposit. The company pays a slightly
            higher rate of interest on deposits made with them, then a bank fixed deposit for a fixed time period.

        </p>


        <div id="card"
            style="background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #ffffff 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5><b>How safe are Corporate Fixed Deposits?</b>
            </h5>
            <p>Corporate fixed deposits are riskier than bank fixed deposits and do not enjoy the safety, bank deposits
                provide. Your money in a bank FD is guaranteed by the Deposit Insurance and Credit Guarantee Corporation
                up to INR 1 lakh in the bank.
                The deposits you make in a corporate fixed deposit are unsecure in nature. The company could default on
                the interest payments to you, or worse not return your principal amount. You need to be assured that
                your money is in safe hands.

            </p>

            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Higher Interest</b></h6>
                            <p>All you have to do is show your health insurance card at the hospital. You get free
                                treatment, at any of the network hospitals under the health plan.
                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Benefits Senior Citizens</b></h6>
                            <p>Health insurance plans offer first time buyers, the option to enter health insurance
                                plans, even at 65 years of age.</p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Invest in Bank Corporate FD</b></h6>
                            <p>Premiums on health plan, tax deductible up to INR 25,000 a year. If you are under 60
                                years. If you are over 60 years, it is INR 30,000.
                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Safety Depending on rating</b></h6>
                            <p>The health insurance plan offers you health insurance across your lifetime, as long as
                                you pay the health insurance premiums.
                            </p>
                        </div>
                    </div>
                </div>
            </div><br><br>
        </div><br>
        <!--==================End card plze card here==================-->

        <h5>Eligibility for Corporate Fixed Deposit</h5>
        <p>If you are a resident of India or an NRI, you can invest in a corporate fixed deposit. Senior citizens,
            housewives, charitable and religious institutions invest in a corporate fixed deposit.</p>

        <!--==============first card for content============-->
        <div style="  background: linear-gradient(to right, #e4e1f5, #c1dbe6, #a5fecb); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" data-aos="flip-down"
            id="card">
            <h5>How liquid are corporate fixed deposits?</h5>
            <ul>
                <li>You can make a premature withdrawal from a bank fixed deposit with a small penalty.
                </li>
                <li>If you withdraw your money from a Company FD within 6 months after you deposit your money, no
                    interest is paid to you.
                </li>
                <li>If you withdraw your money from the Company FD within 6-12 months after the deposit date, you will
                    get a lesser interest say 2-3% lesser than the actual interest rate promised.
                </li>
            </ul>

        </div><br>
        <!--==============End first card for content============-->
        <!--==============second card for content============-->
    
        <div style="background: linear-gradient(to right, #dad299, #b0dab9); padding: 40px;" data-aos="flip-up">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>How do you make sure your money invested in the corporate fixed deposit is safe?</b></h4>
                    <ul>
                <li>You need to check the credit rating of the corporate fixed deposits before investing your hard
                    earned money with them.
                </li>
                <li>Rating agencies like Crisil, rate corporate fixed deposits. If the corporate fixed deposit has a
                    rating of FAAA, you can be rest assured your money is safe. This is the highest rating and
                    guarantees that the Company will pay interest
                    on the money deposited with them and return the principal amount you deposit with them.
                </li>
                <li>If a company has a high rating, it is easier for it to borrow money from you, as well as other
                    people and it will offer a lesser rate of interest than say a lower rated corporate fixed deposit.
                </li>
                <li>FA rating are also highly safe, but not as safe as FAAA rated corporate fixed deposits and offer you
                    a higher rate of interest to make up for the additional risk.
                </li>
                <li>FA rated company deposits are adequately safe. If the corporate fixed deposit has a rating of FB or
                    FC, you need to be very careful, even if the company pays you a high rate of interest on the
                    deposits you make with them.
                </li>
            </ul>

                </div>
                <div class="col-sm-6 text-center">
                <div class="about-col">
                        <img src="img/corporate.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div><br>
        <!--==============End second card for content============-->

        <!--==============THIERD card for content============-->
        <div style=" background: linear-gradient(to right, #acb6e5, #86fde8); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" data-aos="flip-right"
            id="card">
            <h5>How to apply?</h5>
            <ul>
                <li>You can approach the company where you want to invest in a corporate fixed deposit. Many a time
                    companies place advertisements of their corporate fixed deposits in leading newspapers.
                </li>
                <li>The tenure of a corporate fixed deposit is generally 1-5 years.
                </li>
                <li>You can withdraw prematurely from your corporate fixed deposit under certain conditions.
                </li>

            </ul>

        </div>
        <!--==============End Thierd card for content============-->
    </div>


    </div>
</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>