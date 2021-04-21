 <style>/*-------------------------------------------------------------- # Services --------------------------------------------------------------*/ .services .icon-box { padding: 30px; position: relative; overflow: hidden; background: #fff; box-shadow: 0 0
29px 0 rgba(68, 88, 144, 0.12); transition: all 0.3s ease-in-out; border-radius: 8px; z-index: 1; } .services .icon-box::before { content: ''; position: absolute; background: #e1f0fa; right: -60px; top: -40px; width: 100px; height: 100px; border-radius:
50px; transition: all 0.3s; z-index: -1; } .services .icon-box:hover::before { background: #3498db; right: 0; top: 0; width: 100%; height: 100%; border-radius: 0px; } .services .icon { margin: 0 auto 20px auto; padding-top: 10px; display: inline-block;
text-align: center; border-radius: 50%; width: 60px; height: 60px; background: #3498db; transition: all 0.3s ease-in-out; } .services .icon i { font-size: 36px; line-height: 1; color: #fff; } .services .title { font-weight: 700; margin-bottom: 15px; font-size:
18px; } .services .title a { color: #111; } .services .description { font-size: 15px; line-height: 28px; margin-bottom: 0; } .services .icon-box:hover .title a, .services .icon-box:hover .description { color: #fff; } .services .icon-box:hover .icon {
background: #fff; } .services .icon-box:hover .icon i { color: #3498db; } /*-------------------------------------------------------------- # More Services --------------------------------------------------------------*/ .more-services { padding-top: 20px;
} .more-services .card { border: 0; padding: 160px 20px 20px 20px; position: relative; width: 100%; background-size: cover; background-repeat: no-repeat; background-position: center center; } .more-services .card-body { z-index: 10; background: rgba(255,
255, 255, 0.9); padding: 15px 30px; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); transition: 0.3s; transition: ease-in-out 0.4s; border-radius: 5px; } .more-services .card-title { font-weight: 700; text-align: center; margin-bottom: 15px; } .more-services
.card-title a { color: #222222; } .more-services .card-text { color: #5e5e5e; } .more-services .read-more a { color: #777777; text-transform: uppercase; font-weight: 600; font-size: 12px; transition: 0.4s; } .more-services .read-more a:hover { text-decoration:
underline; } .more-services .card:hover .card-body { background: #3498db; } .more-services .card:hover .read-more a, .more-services .card:hover .card-title, .more-services .card:hover .card-title a, .more-services .card:hover .card-text { color: #fff;
}
</style>
 <?php include 'header.php'; ?>
</head>

<body>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        // animation after transition ends
        // indicators works properly

        $('.carousel').on('slid.bs.carousel', function() {
            var carouselData = $(this).data('bs.carousel');
            var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

            $('.result p')
                .removeClass('active-p')
                .eq(currentIndex)
                .addClass('active-p');
        });
    </script>
    <?php include 'footer.php'; ?>