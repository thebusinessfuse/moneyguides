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
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #0cbaba;
background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/debt.png" alt="" width="70%">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Debt
                                Fund</span></h4>

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

    <!--content section-->

    <div class="text-center">
        <h4 class="spanals"><b>Debt Fund</b></h4>
    </div>
  
    <div style="padding:30px;  background: linear-gradient(to right, #acb6e5, #86fde8);" data-aos="fade-up-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                <img src="img/debt.png" alt="" width="50%">
                </div>
                <div class="col-sm-6">
                <h4><b>Debt Fund</b></h4>
                    <ul>
                        <li>Debt funds are mutual funds which invest in fixed income securities such as bonds, money
                            market instruments
                            (treasury bills, Government bonds, non-convertible debentures) or even a combination of
                            the two.</li>
                        <li> A debt fund
                            which invests in money
                            market instruments is called a liquid fund.</li>
                        <li>A liquid fund ensures that the principal amounts you have
                            invested are safe. It also gives decent returns as its earnings are from interest.</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

   
        <div id="card"
            style="  background: linear-gradient(to right, #314755, #26a0da);  padding: 20px;" data-aos="fade-up-left">
            <h5 class="text-center text-white"><b>Why invest in Debt Funds?</b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Safer than equity</b></h6>
                            <p>Investments in debt funds are not affected by volatility in the stock market. This
                                reduces risk in your investment.</p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Stable returns</b></h6>
                            <p>You get lesser but more stable returns, than equity. You replace volatility with
                                stability. Debt funds are more liquid than fixed deposits.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Flexibility</b></h6>
                            <p>You can invest small amounts regularly through the SIP route. Whenever you have extra
                                money, you can invest it in debt funds.</p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Taxation Benefit</b></h6>
                            <p>The profit you make in the long term is taxed with an indexation benefit. You save on
                                your taxes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>
        <div class="container">
        <h4 class="text-center">Types of Debt Funds</h4>

        <!--==============End second card for content============-->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5>Fixed maturity plans</h5>

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Fixed maturity plans are close ended and invest in debt which matches the term of the
                                scheme. Fixed
                                maturity plans have tenures ranging from 3 months to 5 years. You must invest in a fixed
                                maturity
                                plan which matches your financial
                                goals.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5>Short term fund</h5>

                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>They invest in debt such as bonds, commercial paper and certificates of deposit with a
                                maturity of
                                3-6 months.

                            </li>

                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5>Taxation of Debt schemes
                        </h5>

                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Short term capitals gains (gains under 3 years), are added to your taxable salary. Taxed
                                as per
                                income tax slab you fall under. Long term capital gains (gains over 3 years), are taxed
                                at 20% with
                                indexation.</li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        <h5>Income funds
                        </h5>

                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Income funds invest in Government bonds, securities and even corporate debentures. They
                                invest
                                across a wide range of maturities. They invest in short term instruments of 1-2 years
                                and also in
                                long term instruments of 10-15 years.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main><br><br>
<!-- End #main -->

<?php include 'footer.php'; ?>