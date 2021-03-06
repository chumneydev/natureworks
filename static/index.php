<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>C&S Natureworks</title>
        
        <meta name="title" content="<?= $page->seo->title;?>">      
        <meta name="description" content="<?= $page->seo->description;?>">
        <meta name="keywords" content="<?= $page->seo->keywords;?>">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="5 days">
        <meta name="author" content="Chumney & Associates">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/css/bulma.css">
        <link rel="stylesheet" href="dist/css/slick.css">
        <link rel="stylesheet" href="dist/css/slick-theme.css">
        <link rel="stylesheet" href="dist/css/main.css">
    </head>
    <body>
        

    <section id="nav">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            
            <div class="navbar-brand">
                <a class="navbar-item is-size-3 has-text-primary" href="#">C&S Natureworks</a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item">Home</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Services</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">Land Clearing</a>
                            <a class="navbar-item">Forestry Mulching</a>
                            <a class="navbar-item">Brush Cutting</a>
                            <a class="navbar-item">Grading</a>
                            <a class="navbar-item">Ponds</a>
                            <a class="navbar-item">Residential Handscape</a>
                            <a class="navbar-item">Wildlife Removal</a>
                        </div>
                    </div>
                    <a class="navbar-item">Gallery</a>
                    <a class="navbar-item">About Us</a>
                    <a class="navbar-item">Contact Us</a>
                </div>
                
            </div>
        </nav>
        <div class="call-us is-hidden-mobile">
            <p>
                <span class="fa-stack fa-sm">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-phone fa-stack-1x fa-inverse fa-flip-horizontal"></i>
                </span>
                Call us Anytime: <a href="tel:864-415-7979">(864) 415-7979</a>
            </p>
        </div>    
    </section>

    <!-- slideshow -->
    <section id="slideshow">
        <div class="columns">
            <div class="column is-12-desktop is-paddingless slideshow">

                <div class="slide">
                    <div class="copy">
                        <h2>Check out our services</h2>
                        <h3>Landscaping and more</h3>
                        <a href="#" class="button is-primary">> Click for more info</a>
                    </div>
                    <img src="dist/images/slide.png" alt="slide" />
                </div>

                <div class="slide">
                    <div class="copy">
                        <h2>Check out our services</h2>
                        <h3>Landscaping and more</h3>
                        <a href="#" class="button is-primary">> Click for more info</a>
                    </div>
                    <img src="dist/images/slide.png" alt="slide" />
                </div>

            </div>
        </div>
    </section>

    <!-- slideshow -->



    <!-- services -->
    <section id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-12-desktop is-12-mobile has-text-centered">
                    <h1>Our Services</h1>
                </div>
            </div>


            <div class="columns">
                
                <div class="column is-4-desktop is-12-mobile">

                    <div class="card has-background-primary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                            <h2>Land Management</h2>
                                <p>C & S Nature Works offers a full range of land clearing services to make your property ready for development that fits your vision. Whether you’re clearing brush to create a pasture for cattle or excavating land to prepare for residential construction, our services run the gamut. Previous customers have turned to us to create access roads, remove debris, clear land for food plots, prepare land for building foundation, and much more</p>
                            </div>
                        </div>
                        <a href="#" class="button is-secondary service-btn">> Click for more info</a>
                    </div>

                </div>


                <div class="column is-4-desktop is-12-mobile">

                    <div class="card has-background-secondary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h2>Wildlife Removal</h2>
                                <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.</p>
                            </div>
                        </div>
                        <a href="#" class="button is-primary service-btn">> Click for more info</a>
                    </div>

                </div>


                <div class="column is-4-desktop is-12-mobile">

                    <div class="card has-background-primary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h2>Pond & Water Features</h2>
                                <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.</p>
                            </div>
                        </div>
                        <a href="#" class="button is-secondary service-btn">> Click for more info</a>
                    </div>

                </div>




            </div>
        </div>
    </section>
    <!-- services -->



    <!-- main -->
    <section id="about">
        <div class="container">
            <div class="columns is-vcentered"">

                <div class="column is-7-desktop">
                    <h1>Welcome To <span class="has-text-primary">C & S Natureworks</span></h1>
                
                    <p>C & S Nature Works is the best contractor for forestry mulching, land clearing, brush clearing, and landscaping services – such as grading, brush cutting, and ponds – in Upstate SC. Our land management services take care of residential, commercial, and industrial outdoor needs in Greenville, Spartanburg, Anderson, Pickens, Laurens, and Cherokee counties in South Carolina.</p>

                    <h2><i class="fab fa-pagelines icons"></i> Beautify</h2>
                    <p>Let C & S Nature Works transform your property by clearing overgrown brush or installing residential hardscape or water features.</p>
                    <h2><i class="fas fa-leaf-heart icons"></i> Reclaim</h2>
                    <p>We can help you find your land’s full potential by opening up unusable areas for farming, access roads, construction, and more.</p>
                    <h2><i class="fas fa-raindrops icons"></i> Protect</h2>
                    <p>Keep your home, crops, and loved ones safe from land erosion, fire hazards, and harmful wildlife.</p>

                    <p>We handle projects from beginning to finish – from clearing services such as excavation, debris removal, and landscape prep to appearance upgrades like ponds, patios, and fire pits. If your job involves the outdoors, it’s our specialty.</p>
                </div>

                <div class="column is-5-desktop">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/UJ6axmLoQZ8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>



            </div>

        </div>

    </section>
    <!-- main -->

    <!-- steps -->
        <!--<section id="steps">
            <div class="columns has-text-white">
                <div class="column is-12-tablet is-7-desktop">
                    <h1>Why Choose Us?</h1>
                    <h2><span>The Reasons</span> Why  you should contact us...</h2>
                    <div class="step">
                        <p class="number">1</p>
                        <h3>Experience</h3>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
    
                    <div class="step">
                        <p class="number">2</p>
                        <h3>Quality</h3>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>

                    <div class="step">
                        <p class="number">3</p>
                        <h3>Satisfaction</h3>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                </div>

                <div class="column is-5-desktop is-paddingless is-hidden-mobile step-image">
                    <img src="dist/images/steps.png" alt="steps" />
                </div>

            </div>
        </section> -->
    <!-- steps -->


        <section id="steps">
            <div class="container">
                <div class="columns has-text-white">
                    <div class="column is-12-tablet is-12-desktop">
                        <h1>Why Choose Us?</h1>
                        <h2><span>The Reasons</span> Why  you should contact us...</h2>
                        <div class="step">
                            <p class="number">1</p>
                            <h3>Experience</h3>
                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
    
                        <div class="step">
                            <p class="number">2</p>
                            <h3>Quality</h3>
                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>

                        <div class="step">
                            <p class="number">3</p>
                            <h3>Satisfaction</h3>
                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>








    <!-- testimonials -->
        <section id="testimonials">
            <div class="container">
                <div class="columns">
                    <div class="column is-12-desktop">
                        <h1>Testimonials</h1>
                            <div class="test">
                            <div class="testimonial">
                                <div class="testimonial-image">
                                        <img src="dist/images/avatar.png" alt="Avatar">
                                </div>
                                <div class="testimonial-copy">
                                    <p>Scott Swiger</p>    
                                    <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                </div>
                            </div>

                            <div class="testimonial">
                                <div class="testimonial-image">
                                        <img src="dist/images/avatar.png" alt="Avatar">
                                </div>
                                <div class="testimonial-copy">
                                    <p>Vince Tan</p>    
                                    <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                </div>
                            </div>

                            <div class="testimonial">
                                <div class="testimonial-image">
                                    <img src="dist/images/avatar.png" alt="Avatar">
                                </div>
                                <div class="testimonial-copy">
                                    <p>Adam Creveling</p>    
                                    <p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                </div>
                            </div>
                            
                            </div>




                    </div>
                </div>
            </div>
        </section>

    <!-- testimonials -->

    <!-- section -->
    <section id="footer-top">
        <div class="container">
            <div class="columns is-centered is-vcentered">
                <div class="column is-4-desktop has-text-centered"><p class="logo-text">C & S Natureworks</p></div>
                <div class="column is-4-desktop has-text-centered">
                    <img src="dist/images/logo.png" alt="logo" class="logo-image" />
                </div>
                <div class="column is-4-desktop has-text-centered">
                    <ul>
                        <li>(864) 415-7979</li>
                        <li>csnatureworks@gmail.com</li>
                        <li><a href="#"><i class="fab fa-facebook"></i> Like Us on Facebook</a></li>
                    </ul>    
                </div>
            </div>
        </div>
    </section>

    <section id="cities">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-12-desktop">
                    <p>Areas we Serve</p>

                    <ul class="cities-main">
                        <li>Greenville</li>
                        <li>Spartanburg</li>
                        <li>Anderson</li>
                        <li>Pickens</li>
                        <li>Laurens</li>
                        <li>Cherokee</li>
                    </ul>    
                    <ul class="cities-less">
                        <li>Mauldin | Berea | Powdersville | Wade Hampton | Simpsonville | Travelers Rest | Easley | Taylors | Five Forks | Fountain Inn | Slater-Marietta | Liberty | Piedmont | Greer | Gray Court | Tigerville | Pendleton | Pelzer | Williamston | Northlake | Belton | Woodruff | Reidville | Duncan | Wellford | Boiling Springs | Inman | Campobello | Landrum | Highland | Cleveland | Pumpkintown | Clemson | Williamston | Enoree | Roebuck | Cowpens | Chesnee | Gaffney</li>
                    </ul>    

                </div>
            </div>
        </div>
    </section>


    





    <!-- section -->






    <!-- footer -->
    <footer class="footer">
        <div class="content">
            <?php $currentYear = date('Y'); ?>
            <p>&copy; <?= $currentYear; ?> Chumney & Associates</p>
        </div>
    </footer>
    <!-- footer -->


    <script src="https://www.theautohost.com/_assets/coding/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="dist/js/slick.min.js"></script>
    <script type="text/javascript" src="dist/js/all.min.js"></script>
    <script type="text/javascript" src="lib/main.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {
              // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });

            $('.test').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                autoplay: true,
                  responsive: [
                    {
                      breakpoint: 1200,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 1008,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 600,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }

                          ]

            });

            $('.slideshow').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 4000

            });


        });
    
    </script>
    
    
    </body>
</html>