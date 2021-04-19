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

    <!-- <section class="inner-page"> -->
        <div class="container-fluid" id="card" style="padding: 25px; background-color: #ffa69e;
background-image: linear-gradient(315deg, #ffa69e 0%, #5d4954 74%);
            ">
            <!-- ======= How It Works Section ======= -->

            <div class="container" data-aos="fade-up">
                <div class="row about-cols">

                    <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <img src="img/pension.png" alt="" width="100%">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h3 style="font-weight: bold;"><span style="color: aquamarine;">National Pension Scheme</span></h3>
                        <p style="color: white;">If you want to live alone with your family and not have several
                            neighbors as in an apartment.</p>
                        <!-- ======= Contact Section ======= -->
                        <section id="contact">
                                <div class="container" data-aos="fade-up">
                                    <div class="container">
                                        <div class="form">
                                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                                <div class="row">
                                                    <div class="form-group col-md-6">

                                                        <input type="text" name="name" class="form-control rounded" id="name" placeholder="Your Name" required>
                                                    </div>
                                                    <div class="form-group col-md-6 mt-3 mt-md-0">
                                                        <input type="email" class="form-control rounded" name="email" id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group mt-3">
                                                    <input type="tel" class="form-control rounded" name="message" placeholder="Phone Number" required></input>
                                                </div>
                                                <div class="form-group mt-3">
                                            <textarea class="form-control rounded" rows="2" id="comment"
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
    </section>


        <!--content section-->
        <div class="container">
            <h3>National Pension Scheme</h3>
            <p>The Government of India launched the new pension scheme on the 1st April 2009. If you are between 18 to 65 years of age, you can subscribe to the new pension scheme. You have to contribute a minimum amount of INR 6000 per year, which can be
                paid at once (single installment), or can be paid in installments of at least INR 500 a month. You can invest any amount in a new pension scheme (no upper limit). Your money is locked (you cannot withdraw the money) until you are 60 years
                of age. On retirement (age of 60 years), you get 60% of the amount (Corpus built), as a lump sum. You can also withdraw 60% of the amount in a phased manner (slowly in installments), after 60 years, until you are 70 years of age. You have
                to compulsorily purchase an immediate annuity plan with 40% of the amount which is left behind. If you withdraw the money before 60 years you will get only 20% of the corpus (money collected) and you will have to compulsorily take an annuity
                policy with the remaining 80% of the amount. If you (policy holder) die before maturity of the policy, your nominee’s can withdraw the whole amount at once.
            </p>



            <div id="card" style=" background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">

                <!--==================card plze card here==================-->
                <h5 class="text-center text-white"><b>Why invest in the New Pension Scheme?</b></h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">

                            <div class="container"><br>
                                <h6><b>Good Retirement</b></h6>
                                <p>It helps you set aside money for your retirement. It invests in equity to give you good returns for your retirement.</p>
                            </div>
                        </div>
                    </div><br>

                    <div class="col-sm-3">
                        <div class="card">

                            <div class="container"><br>
                                <h6><b>Lifetime Commitment</b></h6>
                                <p>A compulsory investment in annuity means you get a pension even after you retire. This translates to a lifetime commitment.
                                </p>
                            </div>
                        </div>
                    </div><br>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="container"><br>
                                <h6><b>Tax Benefits</b></h6>
                                <p>You get tax deductions on your salary, if you invest in NPS. The amount accumulated in the NPS is not taxed. </p>
                            </div>
                        </div>
                    </div><br>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="container"><br>
                                <h6><b>Good Management</b></h6>
                                <p>Fund managers manage your money invested in equity, ensuring that you get good returns over the long term.

                                </p>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!--==================End card here==================-->
            </div><br>


            <!--==============first card for content============-->
            <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
                <h5>Where to open NPS account?</h5>
                <ul>
                    <li>You can approach the points of presence service providers (POS-SP), where you can invest in the new pension scheme. You have to apply for a permanent retirement account number. (PRAN)
                    </li>
                    <li>Over 900 branches of Public and Private sector banks are the main points of presence (POS-SP). You can also open a new pension scheme account at the post office.
                    </li>
                </ul>
            </div>
            <br>
            <!--==============End first card for content============-->

            <!--==============first card for content============-->
            <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
                <h5>How is your money invested in the new pension scheme?</h5>
                <ul>
                    <li>Your money is invested in the new pension scheme under the active choice or the auto choice option.
                    </li>
                </ul>
            </div>
            <br>
            <!--==============End first card for content============-->

            <!--==============first card for content============-->
            <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
                <h5>Active choice</h5>
                <p>If you choose the active choose option, your money is invested in these 3 asset classes:</p>
                <ul>
                    <li>Asset Class E: Invests in equity. The investment in equity is of high risk.</li>
                    <li>Asset Class C: Invests in fixed deposits, public sector bonds, corporate bonds and liquid funds. The investment in fixed income securities is of medium risk.
                    </li>
                    <li>Asset Class G: An investment in Government securities. The investment in Government security is very safe. You can choose the proportions to invest in these assets. A maximum of only 50% can be allocated to equity.
                    </li>
                </ul>
            </div>
            <br>
            <!--==============End first card for content============-->


            <!--==============first card for content============-->
            <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
                <h5>Auto choice</h5>

                <ul>
                    <li>If you do not opt for the active choice, you are given the default option called the auto choice.</li>
                    <li>If you are between 18-36 years of age you are automatically assigned 50% in equity (Asset Class E), 30% in fixed deposits, public sector bonds, corporate bonds and liquid funds (Asset Class C) and 20% in Government Securities (Asset
                        Class G).

                    </li>
                    <li>After you complete 36 years of age, the allocation towards highly safe Government securities (Asset Class G), goes on increasing and the equity component goes on decreasing. This is necessary to preserve the value of the portfolio
                        (investment).

                    </li>
                    <li>At 55 years of the allocation towards Government securities (Asset Class G), is 80% with Asset Classes C and E accounting for the remaining 20%.
                    </li>
                </ul>
            </div>
            <br>
            <!--==============End first card for content============-->

            <!--==============first card for content============-->
            <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
                <h5>New Pension Scheme Tax Benefits</h5>

                <ul>
                    <li>You get deduction of INR 1.5 lakhs under Section 80 CCD which has been raised from the limit of INR 1 lakh as per the budget 2015-16.
                    </li>
                    <li>You get a total deduction under Section 80C, Section 80 CCC and Section 80 CCD combined up to INR 2 lakhs per year. Your withdrawals from the new pension scheme are taxed under the EET regime. You get tax concessions for your investment
                        and returns (amount your corpus increases), in the new pension scheme plan.

                    </li>
                    <li>The 60% lump sum at withdrawal (maturity of the scheme), is added to your taxable salary and taxed as per the income tax slab you fall under. The returns from the immediate annuity (pension), are added to your taxable salary and taxed
                        as per the income tax slab you fall under.

                    </li>

                </ul>
            </div>
            <br>
            <!--==============End first card for content============-->
        </div>

    </main><br><br>
    <!-- End #main -->
    <?php include 'footer.php'; ?>