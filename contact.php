<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
}
</style>
<?php include 'header.php';?>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container card" style="background-color: #287a31;
            background-image: linear-gradient(315deg, #63d471 0%, #084258 74%);">
            <div class="row">
                <div class="section-header">
                    <h2 style="color: white;">Contact Us</h2>
                    <p style="color: white;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis
                        odio eius praesentium, suscipit magnam laudantium ab deleniti soluta sunt, mollitia quidem id
                        aut quasi dolorum nesciunt amet tenetur debitis. Mollitia eius,
                        asperiores pariatur quaerat aut accusamus odit id sit sed, eaque earum sequi porro ipsum, error
                        ea et quod?
                    </p>
                </div>
                <div class="container mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                        width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              
                <div class="col-sm-6">
                  
                    <div class="row text-center">
                    <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                        <div class="container" data-aos="fade-up">
                        <i class="bi-geo-alt" style="width: 500px; color: #ffffff;"></i>
                        <h6 style="color: white;">Address<br><span>425/39, 7th floor, 11th cross, Wilson Garden
                            Bangalore-560027</span></h6>
                        <address style="color: white;">
                        </address>

                        <i class="bi bi-phone" style="color: #ffffff;"></i><br>
                        <h6 style="color: white;">Phone Number<br><span>
                        <a href="tel:+91-7795183795" style="color: #ffffff;">+91-7795183795</a>
                        </span></h6>
                        
                        <i class="bi bi-envelope" style="width: 350px; color:#ffffff;"></i><br>
                        <h6 style="color: white;">Email<br><span><a href="info@moneyguides.in" style="color: #ffffff;">info@moneyguides.in</a></span></h6>
                     
                    </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                   
                </div>

                <div class="col-sm-6">
                    <div class="container">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-md-6 mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="text-center"><button type="submit" class="bg-success">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br><br>

            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->
<?php include 'footer.php'; ?>