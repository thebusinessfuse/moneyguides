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
    <div class="container-fluid" id="card" style="padding: 25px;background-color: #5d4257;
background-image: linear-gradient(315deg, #5d4257 0%, #a5c7b7 74%);
">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">

                        <img src="img/invest.png" alt="" width="80%">


                    </div>
                </div>


                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= --><br>
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Investment Planning</span></h4>

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
        <h4>What is Investment Planning?</h4>
        <p>An Investment means keeping aside money today, to get a higher return in the future. Investment planning
            needs to be done based on the risk you are able to handle. If you are risk averse you must invest in fixed
            income securities. The money
            you invest is safe and you get interest on it. You can invest in equity if you like to take risks in your
            investments. You can invest your money in shares or equity mutual funds to get higher returns, if you are a
            risk aggressive investor.

        </p>
        <h6>These are some of the financial instruments you would consider:</h6>
        <ul>
            <li>Public Provident Fund</li>
            <li>5 year bank Fixed Deposits</li>
            <li>National Savings Certificate</li>
            <li>Senior citizens savings scheme</li>
            <li>Post office monthly income scheme</li>
        </ul>

        <div id="card"
            style=" background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);; padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">

            <!--==================card plze card here==================-->
            <h5 class="text-center text-white"><b>Why Invest Planning?</b></h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Your Emergency Fund
                                </b></h6>
                            <p>It helps you increase your money which you can set aside for an emergency. You don’t need
                                to borrow money to pay the medical bill.

                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Meet Financial Goals
                                </b></h6>
                            <p>You can meet financial goals such as holidaying abroad, buying a car or even setting
                                aside money for retirement.

                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Tax Benefits
                                </b></h6>
                            <p>If you invest in equity linked saving schemes a type of equity mutual fund, you get tax
                                benefits on your investment.

                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Increase Your Wealth
                                </b></h6>
                            <p>If you want to become rich, just saving money is not enough. You need to invest.
                                Investing helps you gain the benefits of compounding.


                            </p>
                        </div>
                    </div>
                </div>
            </div><br>
            <!--==================End card here==================-->
        </div><br>


        <!--==============first card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h4 class="text-center">Key factors to consider for Investment Planning</h4>
            <h5>If you are an aggressive investor you would invest in</h5>
            <p>Equity Linked Savings Scheme (ELSS):</p>
            <ul>
                <li>If you are willing to bear a very high risk for a very high return, then you must consider an
                    investment in ELSS.
                </li>
                <li>It gives you a high return of around 10-12% if the stock markets do well but can also result in
                    severe losses if the market crashes.
                </li>
                <li>You also enjoy a tax deduction under Section 80C, up to INR 1.5 lakhs on the money invested in the
                    ELSS.
                </li>
                <li>ELSS also enjoys “EEE” status which means the money invested in the ELSS. The money accumulated with
                    time and the maturity amount (withdrawn after 3 years) is free of tax. Since you are forced to
                    invest in the ELSS for at least 3 years
                    you are a long term investor and can get good profits.
                </li>
                <li>You could invest in a Systematic Investment Plan (SIP) of an equity mutual fund
                </li>
                <li>In a SIP a fixed sum of money is deducted each month from your bank account and invested in an
                    equity mutual fund scheme of your choice, on a particular day of the month. Your money is managed by
                    a Professional Fund Manager. You do
                    not need to time the market. You just spend time in the market.
                </li>
            </ul>


        </div><br>
        <!--==============End first card for content============-->

        <!--==============second card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">

            <h5>You could invest in a Systematic Investment Plan (SIP) of an equity mutual fund
            </h5>
            <p>Equity Linked Savings Scheme (ELSS):</p>
            <ul>
                <li>In a SIP a fixed sum of money is deducted each month from your bank account and invested in an
                    equity mutual fund scheme of your choice, on a particular day of the month. Your money is managed by
                    a Professional Fund Manager. You do
                    not need to time the market. You just spend time in the market.

                </li>

            </ul>


        </div>
        <!--==============End second card for content============-->
</main><br><br>
<!-- End #main -->

<?php include 'footer.php'; ?>