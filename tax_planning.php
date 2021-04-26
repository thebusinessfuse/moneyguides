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

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="img/tax.png" alt="" width="60%">

                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h4 style="font-weight: bold;"><span style="color: black;">Get The Right Advice on<br>Tax
                                Planning</span></h4>

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
        <h4 class="spanals"><b>Tax Planning</b></h4>
    </div>

    <div style="background: linear-gradient(to right, #e0eafc, #cfdef3); padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up">>
                    <h5><b>What is Tax Planning</b></h5>
                    <ul>
                        <li>Tax planning means analyzing your financial situation, from the point of view of tax
                            efficiency.</li>
                        <li>It helps a
                            taxpayer employ tax exemptions, deductions and benefits to minimize tax liability and
                            optimize finances.</li>
                        <li> Tax
                            planning is different
                            from Tax Evasion.</li>
                        <li>Tax Planning is legal, whereas tax evasion is not.</li>
                        <li>Tax planning aims at availing tax
                            benefits through legitimate means on the lines of provisions and relaxations provided in
                            tax laws.</li>

                    </ul>
                </div>
                <div class="col-sm-6 text-center" data-aos="fade-down">
                    <img src="img/tax.png" alt="" width="50%">
                </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <!--==============first card for content============-->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item" id="crad">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5>Defer Income</h5>

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Deferring income is a good strategy to save tax. Deferring income means
                            postponing your income to a future time. By deferring your income, you can claim deductions
                            now,
                            when tax rates are higher. These investments
                            would mature in the future, when rates might be lower. So, you will gain today as well as in
                            the
                            future
                        </li>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5>Pay off expenses on time</h5>

                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Pay off your expenses on time. This allows you to claim tax
                            deductions and also save tax. Remember to record all the expenses that you make, so that you
                            do not
                            forget to claim them. Deductions on expenses
                            like insurance premiums can only be claimed in the previous year after the payment is made.
                        </li>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5>Plan your charity: </h5>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Yes, charity should be selfless, but that doesn’t mean you cannot avail
                            tax benefits on charitable activities. If you think your taxable income is simply too much,
                            plan to
                            give some in charity. Then, claim
                            deduction on the same and save tax!
                        </li>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        <h5>Make it a continuous process</h5>


                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Tax planning should not be a one-time activity. You have a
                            whole year to plan your expenses, investments and taxes. Therefore, keep monitoring your
                            finances
                            and tax planning strategies. If you find
                            some aspects of your tax planning are going out of hand, you have time to fix the issue well
                            in
                            advance, rather than pay a fortune in tax or penalties.
                        </li>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <h5>Life Insurance Plans</h5>

                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Avail Life Insurance Plans to save tax. They have dual benefits; you
                            save tax in the form of premium payments and your life is insured. Be sure to buy a life
                            insurance
                            plan that suits your needs. Both life
                            insurance plans (term or endowment), enjoy tax deductions up to Rs 1.5 lakhs a year under
                            Section 80
                            C, on the premiums paid.
                        </li>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingsix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        <h5>Invest in Tax Saving Instruments</h5>
                    </button>
                </h2>
                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>You may invest in PPF, ELSS, NSC, 5 year tax saver FDs and
                            other tax saving instruments to save tax. If you have a girl child, you open a Sukanya
                            Samriddhi
                            Yojana (SSY) account in her name and
                            make regular contributions to save tax.
                        </li>
                    </div>
                </div>
            </div>
        </div><br>




        <div style="background: linear-gradient(to right,#afc9b7, #cce5ed); padding: 30px;" id="card" data-aos="flip-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Tax Planning Goals </h5>
                        <p>The goal of tax planning is to arrange financial affairs so as to maximize one’s taxes.
                            Tax-planning is
                            also as much about contributing to financial goals as it is about reducing ones tax
                            liability. Few
                            investment options that help us
                            to save tax:
                        </p>
                        <ul>
                            <li>Employee Provident Fund (EPF)
                            </li>
                            <li>Public Provident Fund
                            </li>
                            <li>National Savings Certificate
                            </li>
                            <li>Long Term Government Securities
                            </li>
                            <li>Bank Deposits
                            </li>
                            <li>Life Insurance Products
                            </li>
                            <li>Pension Products
                            </li>
                            <li>Mutual Funds
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h5>Importance of Tax Planning</h5>

                        <ul>
                            <li>Tax exemptions, deductions and a rebate can be claimed up to the date of filing income
                                tax returns.
                            </li>
                            <li>Tax planning saves you from severe penal consequences, as the law reduces the scope of
                                tax
                                avoidance.
                            </li>
                            <li>The Government provides incentives through tax laws, encouraging citizens to save tax.
                            </li>
                            <li>Tax planning ensures that you plan your expenses well. For companies, it helps in
                                capital budgeting,
                                sales promotion and so on.
                            </li>
                            <li>When interest rates are high, the amount saved in the form of taxes is as good as an
                                interest-free
                                loan from the Government.
                            </li>
                            <li>Companies can claim repairs, renewals, depreciation on Plant and Machinery and also
                                deduct business
                                expenses, giving them more money to invest in the business.
                            </li>
                            <li>Tax planning can reduce taxable income and capital gains. It gives you a clear picture
                                of your
                                savings, investments and pensions.
                            </li>
                            <li>Tax planning can help with estate planning. Many investments need investors to mention a
                                beneficiary
                                or a nominee. This ensures that your assets pass directly to your heirs.
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