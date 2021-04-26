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


    <!-- End Breadcrumbs Section -->


    <div class="container-fluid" id="card" style="padding: 25px; background-color: #a55c1b;
background-image: linear-gradient(315deg, #a55c1b 0%, #000000 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/current.png" alt="" width="60%">

                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Current
                                Account</span></h4>

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
    <div class="container">
        <div class="text-center">
            <h4 class="spanals"><b>Current Account</b></h4>
        </div>
     
        <div style=" background: linear-gradient(to right, #36d1dc, #5b86e5); padding: 30px;" id="card">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6" data-aos="fade-up">
                        <h5><b>What is Current Account</b></h5>
                        <ul>
                            <li>Businessman in India makes a large number of transactions using banks, during the course
                                of their business.</li>
                            <li>They may deposit or withdraw money a number of times a day or a month. They need to open
                                a current account.</li>
                            <li> Businessmen find current
                                accounts very convenient to receive payments from customers.</li>
                            <li>No interest is paid on the current account.</li>
                            <li>However lately some banks offer interest on current accounts, to lure customers to open
                                current accounts
                                with them.</li>

                        </ul>
                    </div>
                    <div class="col-sm-6 text-center" data-aos="fade-down">
                    <img src="img/current.png" alt="" width="70%">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="card"
            style="  background: linear-gradient(to right, #cc95c0, #dbd4b4, #7aa1d2);   padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5 class="text-center text-dark"><b>Why take up Current Accounts?</b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Benefits Businessmen</b></h6>
                            <p>You can withdraw money, without any limit, if you are a businessman. Your business
                                transactions are executed swiftly.
                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>The Overdraft Benefit </b></h6>
                            <p>If your business I facing a shortfall of money, use the overdraft facility. You can
                                overdraw from your account, to meet this need.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Proves Credit Worthiness
                                </b></h6>
                            <p>lenders willingly lend your money, if you have a current account. This serves as a
                                guarantee that you have money to run the business.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Special features </b></h6>
                            <p>You can use a zero balance current account, when you don’t need to maintain a minimum
                                balance. You make optimum use of your money. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>
        <!--==============first card for content============-->
        <div style="  background: linear-gradient(to right, #d1d5e8, #86fde8); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card" data-aos="flip-up">
            <h5>Eligibility for Current Account </h5>
            <p>If you are a resident of India you can open a current account. Usually opened by businessmen who do not
                get interest on these accounts. You need to maintain higher balance than a savings bank account. You
                have to pay a penalty if you do
                not maintain the minimum balance. </p>
            <h6><b>How to apply</b></h6>
            <ul>
                <li>You require an introduction from a person already holding an account/current account at the bank.
                </li>
                <li>You need to have identity and address proof as part of the KYC (Know Your Customer), procedure.</li>

                <li>To open a current account you have to make a deposit between INR 5000-INR 25000.</li>
            </ul>
        </div>
        <br>
    </div>
</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>