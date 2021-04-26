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

.card:hover { box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2); transform: scale(1.1); }

.container {
    padding: 2px 16px;
}
</style>
<?php include 'header.php'; ?>
<main id="main">

    <!-- <section class="inner-page"> -->
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #af8c9d;
background-image: linear-gradient(315deg, #af8c9d 0%, #8cacac 74%);
            ">
        <!-- ======= How It Works Section ======= -->

        <div class="container-fluid" data-aos="fade-up">
            <div class="row about-cols">

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/demat.png" alt="" width="50%">
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= --><br>
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Demat
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

    <div class="text-center">
        <h4 class="text-center spanals"><b>Demat Account</b></h4>
    </div>
    <div style="background: linear-gradient(to right,#f0f5f1, #a7b8c2); padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up-right">
                    <h4><b>What is Demat Account</b></h4>
                    <ul>
                        <li>The shares that you buy and sell on a stock exchange (BSE or NSE), are stored in a Demat
                            Account.</li>
                        <li> The shares
                            that are stored in your Demat Account are dematerialized (stored in the electronic
                            format) and not as
                            physical shares.</li>
                        <li>When you buy
                            shares, your broker credits your Demat account with shares.</li>
                        <li> These shares are reflected in your statement of
                            holdings (You can see details of the shares you have bought in your account).</li>
                        <li> When you sell the shares in
                            your Demat account, your
                            account is debited (Shares are debited/move out of your Demat account) and money is paid
                            to you for the
                            shares you sell).</li>
                        <li>You need to submit a DIS (Delivery Instruction Slip), to your broker, where you fill in
                            the details of the shares
                            you sell. There are 2 depositories in India.</li>
                        <li> There are the National Securities Depositories Limited (NSDL)
                            and the Central Depositories Services Limited (CDSL).</li>

                    </ul>
                </div>

                <div class="col-sm-6 text-center" data-aos="fade-up-left">
                   
                        <img src="img/demat.png" alt="" width="70%">
               
                </div>
            </div>
        </div>
    </div>

    <div id="card" style=" background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; ">
        <h5 class="text-center text-white"><b>Why invest in Demat and trading Accounts?</b></h5>

        <!--==================card plze card here==================-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card">

                    <div class="container"><br>
                        <h6><b>Safety</b></h6>
                        <p>Physical share certificates can be lost, forged, stolen or destroyed in a fire.
                            Dematerialized shares face no such problems.</p>
                    </div>
                </div>
            </div><br>
            <div class="col-sm-3">
                <div class="card">

                    <div class="container"><br>
                        <h6><b>No Paperwork</b></h6>
                        <p>Shares are stored in an electronic format. There is no paperwork needed. This saves on
                            cost and increases the speed of transactions.</p>
                    </div>
                </div>
            </div><br>

            <div class="col-sm-3">
                <div class="card">
                    <div class="container"><br>
                        <h6><b>Ease of Transaction</b></h6>
                        <p>Shares arising from splits and mergers are easily credited to your Demat account.
                            Dividends credited to bank account.

                        </p>
                    </div>
                </div>
            </div><br>

            <div class="col-sm-3">
                <div class="card">
                    <div class="container"><br>
                        <h6><b>Buy and Sell Fast</b></h6>
                        <p>This is an electronic account. You can access and operate your account anywhere. You can
                            buy and sell shares at great speed.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--==================End card plze card here==================-->
    </div><br>

    <!--==============first card for content============-->

    <div class="container" data-aos="flip-left">
        <div style="  background: linear-gradient(to right,#e3d698, #ebb27a); padding: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>How can you open a Demat account in India?</h5>
                        <ul>
                            <li>A Demat account can be opened with a depository participant, which may be a bank or a
                                stock broker
                                who has a license to do so. You must have a PAN card to open a Demat account as it is
                                very important
                                for your KYC (Know Your Clients),
                                norms.
                            </li>
                            <li>You also require an identity proof (Voters card or your PAN card itself) and an address
                                proof
                                (Passport or a Driver’s License). You have to sign across the copies of the passport and
                                the PAN
                                card and submit them to your depository
                                participant, as part of your Know Your Client (KYC) norms.
                            </li>
                        </ul>

                        <h5>What is trading account?</h5>
                        <ul>
                            <li>You can only store shares in a Demat account. In order to buy and sell shares you
                                require a trading
                                account.
                            </li>
                            <li>You can also opt for the 3-in-1 account which is
                            </li>
                            <li>Your bank account + Demat account + Trading account
                            </li>
                            <li>You buy shares through your Trading account
                            </li>
                            <li>Money is debited from your savings bank account and shares are automatically credited to
                                your Demat
                                account.
                            </li>
                            <li>You sell shares through your trading account
                            </li>
                            <li>Money is credited to your savings bank account and shares are automatically debited from
                                your Demat
                                account.
                            </li>
                        </ul>
                        <h5>What is a basic service of Demat account?</h5>
                        <ul>
                            <li>You can open a basic services Demat account, if you are a first time investor in the
                                stock market.
                                You can also open a basic services Demat account, if you already have a Demat account
                                and you are
                                the sole (only), holder of this account.
                            </li>
                            <li>You can have only a single basic services Demat account.
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h5>Charges in Demat account</h5>
                        <ul>
                            <li>Demat account opening fees:This covers the cost of the agreement with the depository
                                participant.
                            </li>
                            <li>Annual maintenance fees:These fees are charged in advance mainly for the maintenance of
                                the account
                                and the services rendered.
                            </li>
                            <li>Custodian fees:This is mainly charged for the safe keeping of shares in the Demat
                                account and is
                                charged based on the number of shares held in the account.
                            </li>
                            <li>Brokerage fees:Whenever a share is bought or sold, certain transaction or brokerage fees
                                are
                                charged.
                            </li>
                            <li>Dematerialization fees:In order to convert physical shares to the dematerialized form,
                                certain
                                nominal amounts are charged.
                            </li>
                        </ul>

                        <h5>Why you need a basic services Demat account?
                        </h5>
                        <ul>
                            <li>If you are a small investor in the stock markets with holdings less than INR 50,000 then
                                it would be
                                wise to opt for a basic services Demat account also called a no-frills Demat account.
                                There are no
                                annual maintenance charges (maintenance
                                charges are nil), if the holdings in your Demat account are less than INR 50,000.
                            </li>
                            <li>If the value of the shares in your Demat account (value of your holdings) is between INR
                                50,000 –
                                INR 2, 00,000, then you will have to pay an annual maintenance fee of INR 100. If the
                                value of the
                                shares in your account exceeds INR
                                2 lakhs, then you will have to pay an annual maintenance fee, which is the same as that
                                of any
                                normal Demat account. You have the option to convert your Demat account to a basic
                                services Demat
                                account, if the value of your shares
                                (holdings) slips below INR 2 lakhs.
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