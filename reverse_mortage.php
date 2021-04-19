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


    <div class="container-fluid" id="card" style="padding: 25px; background-image: url(https://images.pexels.com/photos/259100/pexels-photo-259100.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);  
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;  ">
        <!-- ======= How It Works Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="row about-cols">
                <div class="col-md-1 col-sm-6" data-aos="fade-up" data-aos-delay="100">

                </div>
                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, mollitia. Odio, dolorum itaque? Ut debitis veritatis accusantium magni suscipit delectus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, mollitia. Odio, dolorum itaque? Ut debitis veritatis accusantium magni suscipit delectus.</p>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">

                    <!-- ======= Contact Section ======= -->
                    <section id="contact" style="background-color: white; border-radius: 10px;" id="card">
                        <h3 style="font-weight: bold;"><span style="color: black;">Reverse Mortgage

                            </span></h3>
                        
                        <div class="container" data-aos="fade-up">
                            <div class="container">
                                <div class="form">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-6">

                                                <input type="text" name="name" class="rounded border-dark form-control"
                                                    id="name" placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="email" class="form-control rounded border-dark"
                                                    name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <input type="tel" class="form-control rounded border-dark" name="message"
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


    <!--content section-->
    <div class="container">
        <h3>Reverse Mortgage</h3>
        <p>A reverse mortgage is similar to a home loan but works in the exactly opposite direction. You avail a home
            loan from a bank to buy a house. You repay the home loan (Principal + Interest), in installments called
            EMI’s (Equated monthly installments),
            within a fixed time period (tenure of the home loan). In a reverse mortgage you borrow against the value of
            your home. You mortgage your house to the bank (pledge your home) and the bank makes payments to you as a
            lump sum, or in periodic
            installments (say once a month). You and your spouse continue to live in the house and on the death of the
            last survivor (you and your spouse), the loan (reverse mortgage) needs to be paid back to the bank with
            interest.
        </p>
        <div id="card"
            style="background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%); padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h5 class="text-center text-white"><b>Why avail Reverse Mortgage?</b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Income</b></h6>
                            <p>Senior citizens get income after retirement. Loan up to 60-90% of property value may be
                                sanctioned.

                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="container"><br>
                            <h6><b>Tenure
                                </b></h6>
                            <p>If you outlive the tenure of the loan, you continue to stay on the property. Ownership
                                continues to remain with you.


                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>No Tax
                                </b></h6>
                            <p>The amount you receive under reverse mortgage is a loan and not an income. You do not
                                have to pay any tax on these amounts.

                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Emergency Money
                                </b></h6>
                            <p>Money can be used for medical and other emergency treatment. Useful as an income after
                                retirement.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>
        <!--==============first card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>
                Eligibility criteria to avail Reverse Mortgage

            </h5>


            <ul>
                <li>Reverse Mortgage can only be availed if you are 60 years or older. If your spouse is a co-applicant
                    (stands guarantee to the loan) she should be at least 58 years of age.</li>
                <li>You need to be the owner of the residential property and reside/live on it. </li>
                <li>Reverse Mortgage cannot be availed on a commercial property.</li>
                <li>Your property needs to have a clear marketable title and should be free of any encumbrances.</li>
                <li>Your property needs to have a residual life of at least 20 years.</li>
                <li>You need a minimum CIBIL score of 700 for the final sanction of your reverse mortgage.</li>

            </ul>
        </div>
        <br>
        <!--==============End first card for content============-->
        <div style=" padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;" id="card">
            <h5>Key factors to consider for Reverse Mortgage </h5>

            <ul>Documents required to avail a reverse mortgage

                <li>You have to fill up loan application form.</li>
                <li>You need to be the owner of the residential property and reside/live on it.</li>
                <li>You have to furnish the proof of ownership of the house.</li>
                <li>You have to furnish details of your property, details of your legal heirs and so on.</li>
            </ul>
        </div>
        <br>

</main><br><br>
<!-- End #main -->
<?php include 'footer.php'; ?>