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
        <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
            background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);
            ">
            <!-- ======= How It Works Section ======= -->

            <div class="container" data-aos="fade-up">
                <div class="row about-cols">

                    <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <img src="img/health_insurance.png" alt="" width="100%">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h3 style="font-weight: bold;"><span style="color: aquamarine;">Send Message
                                Health Insurance Plan</span></h3>
                        <p style="color: white;">Get insured from the comfort of your home</p>
                        <!-- ======= Contact Section ======= -->
                        <section id="contact">
                            <div class="container" data-aos="fade-up">
                                <div class="container">
                                    <div class="form">
                                        <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <div class="row">
                                                <div class="form-group col-md-6">

                                                    <input type="text" name="name" class="rounded form-control" id="name"
                                                        placeholder="Your Name" required>
                                                </div>
                                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                                    <input type="email" class="form-control rounded" name="email" id="email"
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group mt-3">
                                                <input type="tel" class="form-control rounded" name="message"
                                                    placeholder="Phone Number" required></input>
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
    </section><br>


    <!--content section-->

    <div class="container">
        <h3>Health Insurance Plan</h3>
        <p>You have to pay a sum of money (Health insurance premium), to avail a health insurance policy. Your medical
            bills will be paid back to the extent you have insured yourself (premium you have paid). The health
            insurance plan pays your hospitalization
            expenses/bills, if you are hospitalized for at least 24 hours. You can also take a health insurance plan for
            your family under the family floater plan.
        </p>

        <h3>What are things to know before buying a Health Insurance Plan ?</h3>
        <ul>
            <li>Know the waiting period of your health insurance plan
            </li>
            <li>A health insurance plan has a waiting period of 1 month after you avail it. The health insurance plan
                will not pay your medical bills for any disease you contract, within a month of taking up the health
                insurance plan.
            </li>
            <li>You are hospitalized after a week of availing the health insurance plan .When the hospital bill is
                presented you get a nasty shock. Your bills are not settled by the health insurer as you are
                hospitalized within a week of availing your
                health insurance plan. You are covered by the health insurance plan only a month after availing it.
            </li>
        </ul>

        <hr>
        <!--=======================Card content==========================-->

        <div id="card"
            style=" background-color: #63d471;
            background-image: linear-gradient(315deg, #7dac82 0%, #5c6f8d 74%); padding: 25px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">

            <h5 class="text-center" style="color: white;"><b>Why buy Business Insurance?
                </b></h5>
            <!--==================card plze card here==================-->
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Cashless Hospitalization</b></h6>
                            <p>All you have to do is show your health insurance card at the hospital. You get free
                                treatment, at any of the network hospitals under the health plan.
                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Minimum Entry Age
                                </b></h6>
                            <p>Health insurance plans offer first time buyers, the option to enter health insurance
                                plans, even at 65 years of age.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Tax Benefits
                                </b></h6>
                            <p>YPremiums on health plan, tax deductible up to INR 25,000 a year. If you are under 60
                                years. If you are over 60 years, it is INR 30,000.
                            </p>
                        </div>
                    </div>
                </div><br>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="container"><br>
                            <h6><b>Lifelong Renewability
                                </b></h6>
                            <p>Minimum Entry Age Health insurance plans offer first time buyers, the option to enter
                                health insurance plans, even at 65 years of age.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================End card plze card here==================-->
        </div><br>

        <h2 class="text-center">Key factors to consider for Accidental Insurance</h2>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>Types of Accidental Insurance Plans</h3>
            <h5>Individual Accidental Policies:</h5>
            <ul>
                <li>Individual Accidental Policies cover an individual in case of any accident.</li>
            </ul>

            <h5>Group Accident Policies:</h5>
            <ul>
                <li>A the term itself suggests, a Group Accident Policy is not meant for individuals. It is taken by
                    employers for their employees. Depending on the group size, discount on premium may be offered. It
                    is a good value added benefit for small
                    organizations and is available at a low cost. However, this is very basic cover and may not offer
                    benefits like that of individual accidental insurance plan.
                </li>
            </ul>

        </div>

        <br>
        <div id="card" style="padding: 20px; border: 1px solid rgb(219, 209, 209); border-radius: 10px;">
            <h3>How to make a claim on a Personal Accidental Insurance Plan?</h3>
            <h5>Inform the insurer about the accident:</h5>
            <ul>
                <li>The insurer must be informed about the accident as soon as possible. The insurer may also be
                    informed while the insured is on the way to the hospital. In order to show proof that the claim has
                    been filed with the insurer, the policy
                    number or reference number of the insurer should be communicated.
                </li>
            </ul>

            <h5>Inform the insurer at the time of hospitalization:</h5>
            <ul>
                <li>Fill the claim form.</li>
                <li>Submit the FIR or police report if required.</li>
            </ul>

        </div>


    </div><br><br>
</main>
<!-- End #main -->

<?php include 'footer.php'; ?>