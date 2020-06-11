<?php namespace ProcessWire;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->seo->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/uikit.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
</head>
<body>

<header>
    <?php
        $home = $pages->get("/");
        $children = $home->children("!template=settings|sitemap");

    ?>

    <!-- nav -->
    <nav class="uk-navbar" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a class="text-logo uk-text-primary" href="<?= $home->url; ?>">C &amp; S Natureworks</a>
                </li>
            </ul>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <!--<li><a class="uk-text-large" href="#">about</a></li>
                <li><a class="uk-text-large" href="#">blog</a></li>-->

                <?php foreach ($children as $child): ?>
                <?php if ($child->hasChildren()): ?>
                <li>
                <a href="#"><?= $child->title; ?></a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <?php foreach ($child->children as $inner): ?>
                        <li><a href="<?= $inner->url; ?>"><?= $inner->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                </li>

                <?php else : ?>
                <li><a class="uk-text-large" href="<?= $child->url; ?>"><?= $child->title; ?></a></li>

                <?php endif; ?>
                <?php endforeach; ?>

            </ul>
            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>

        </div>
    </nav>

         <div id="sidenav" uk-offcanvas="" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <!--<a href="" class="uk-navbar-item uk-logo">Brand</a>-->
                <ul class="uk-nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 78">
         <?php foreach ($children as $child): ?>
                <?php if ($child->hasChildren()): ?>
                <li>
                <a href="#" class="uk-text-large"><?= $child->title; ?></a>
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <?php foreach ($child->children as $inner): ?>
                        <li><a href="<?= $inner->url; ?>"><?= $inner->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <?php else : ?>
                <li><a class="uk-text-large" href="<?= $child->url; ?>"><?= $child->title; ?></a></li>

                <?php endif; ?>
                <?php endforeach; ?>                </ul>
            </div>
        </div>

    <!-- nav -->

        <div class="call-us">
            <p>
                <span class="fa-stack fa-sm">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-phone fa-stack-1x fa-inverse fa-flip-horizontal"></i>
                </span>
                Call us Anytime: <a href="tel:864-415-7979"><?= $phone; ?></a>
            </p>
        </div>    



    </header>





    <!-- header -->
    <!--<header class='uk-background-muted'>
	    <nav id='masthead-navbar' class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="text-logo uk-text-primary" href="#">C &amp; S Natureworks</a>
            </div>
		    <div class="uk-navbar-right">
		    </div>
	    </nav>
    </header>-->
    <!-- header -->
    
    <?php if ($page->slideshow): ?>
    <!-- slideshow -->
    <section id="slideshow">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; max-height: 700; autoplay: true">

            <ul class="uk-slideshow-items">
                <?php foreach ($page->slideshow as $slide): ?>
                <!--<li>
                    <img src="styles/slide.jpg" alt="" uk-cover>
                    <div class="uk-position-large uk-position-center-left uk-light copy">
                        <h2>Check out our services</h2>
                        <h3>Landscaping and more</h3>
                        <a href="#" class="uk-button uk-button-primary">> Click for more info</a>
                    </div>
                </li>-->
                <li>
                    <img src="<?= $slide->images->first()->url; ?>" alt="<?= $slide->images->first()->description; ?>" uk-cover>
                    
                    <div class="uk-position-large uk-position-center-left uk-light copy">
                        <?= $slide->body; ?>
                        <a href="<?= $slide->link_to_page->url; ?>" class="uk-button uk-button-primary">> Click for more info</a>
                    </div>
                </li>

                <?php endforeach; ?>
            </ul>
            <div class="uk-light">
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>

        </div>    
    </section>
    <!-- slideshow -->
    <?php endif; ?>
    

    <?php if($page->services): ?>
    <!-- services -->
    <section id="services" class="uk-section">
        <div class="uk-container">
            <h2>Our Services</h2>
            <div class="uk-child-width-1-3@m uk-grid-large uk-grid-match" uk-grid>
            
            <?php foreach($page->services as $service): ?>    
            <?php if($service->is_secondary == true): ?>

                <div>
                    <div class="uk-card uk-card-secondary">
                        <div class="uk-card-media-top">
                            <?php $image = $service->images->first(); ?>
                            <img src="<?= $image->url; ?>" alt="<?= $image->description; ?>">
                        </div>
                        <div class="uk-card-body">
                            <h2 class="uk-card-title"><?= $service->service_info->title; ?></h2>
                            <p><?= $service->service_info->description; ?></p>
                        </div>
                        <a href="<?= $service->service_info->url ?>" class="uk-button uk-button-primary service-btn "> > Click for more info</a>

                    </div>
                </div>
                
                
            <?php else: ?>

                <div>
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-media-top">
                            <?php $image = $service->images->first(); ?>
                            <img src="<?= $image->url; ?>" alt="<?= $image->description; ?>">
                        </div>
                        <div class="uk-card-body">
                            <h2 class="uk-card-title"><?= $service->service_info->title; ?></h2>
                            <p><?= $service->service_info->description; ?></p>
                        </div>
                        <a href="<?= $service->service_info->url ?>" class="uk-button uk-button-secondary service-btn "> > Click for more info</a>

                    </div>
                </div>
                
                

            <?php endif; ?>
            <?php endforeach; ?>
            </div>        

        </div>
    </section>
    <!-- services -->
    <?php endif; ?>



    <?php if($page->title !== "Gallery"): ?>
    <?php if($content): ?>
    <!-- about -->
    <section id="about" class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <?php if($page->youtube): ?>
                <div class="uk-width-1-2">
	    		    <?php echo $content; ?>
                </div>

                <div class="uk-width-1-2">
                    <iframe width="100%" height="315" src="<?= $page->youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <?php else: ?>
                <div class="uk-width-auto@m">
	    		    <?php echo $content; ?>
                </div>

                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- about -->
    <?php endif; ?>

    <?php else: ?>

    <section id="content" class="uk-section">
        <div class="uk-container">
            <div uk-grid>
                <div>
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php endif; ?>


                <!--        <div uk-slider="center: true; autoplay: true;finite: true">
            <div class="uk-slider-container">
                <ul class="uk-slider-items uk-child-width-1-3@m uk-grid">
                -->
    

    <section id="steps" class="uk-section" data-src="<?= $steps->url; ?>" uk-img>
        <div class="uk-container">
            <div uk-grid>
                <div>
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





    <!--<ul class="uk-slider-items uk-child-width-1-1 uk-grid uk-grid-small">-->


    <!-- testimonials -->
    <section id="testimonials" class="uk-section">
        <div class="uk-container">

            <div uk-slider="autoplay: true;">

                <div class="uk-position-relative">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-grid uk-grid-small">
                            <?php foreach ($testimonials as $testimonial): ?>
                            <li>
                                <div class="uk-panel">
                                    <img src="<?= $testimonial->images->first()->url; ?>" class="uk-align-left@m uk-align-center" />
                                    <?= $testimonial->body; ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

    <!--<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>-->

            </div>












        </div>
    </section>
    <!-- testimonials -->




                    
    <!-- footer-top -->
    <section id="footer-top" class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m uk-grid-large uk-grid-match uk-vertical-align uk-flex uk-flex-center uk-flex-middle" uk-grid>
                <div class="uk-vertical-align-middle uk-text-center">
                   <p class="logo-text"><?= $store; ?></p>
                </div>
                <div class="uk-vertical-align-middle">
                    <img src="<?= $logo->url; ?>" alt="<?= $logo->description; ?>" class="logo-image uk-align-center" />
                </div>
                <div class="uk-vertical-align-middle">
                    <ul class="uk-text-center">
                        <li><?= $phone; ?></li>
                        <li><?= $email; ?></li>
                        <li><a href="#"><i class="fab fa-facebook"></i> Like Us on Facebook</a></li>
                    </ul>    

                </div>

            </div>
        </div>

    </section>
    <!-- footer-top -->


    <!-- areas -->
    <section id="cities">
        <div class="uk-container">
            <div uk-grid>
                <div>
                    <p>Areas we Serve</p>
                    <?php $countylines = explode("\n", $counties); ?>
                    <?php if($countylines): ?>
                    <ul class="cities-main uk-text-center">
                        <?php foreach($countylines as $county): ?>
                        <li><?= $county; ?>                    
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>


                    <?php $citylines = explode("\n", $cities); ?>
                    <?php if($citylines): ?>
                    <ul class="cities-main uk-text-center">
                        <?php foreach($citylines as $city): ?>
                        <li><?= $city; ?>                    
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>





                </div>
            </div>

        </div>
    </section>
    <!-- areas -->




	<!-- footer -->
    <footer class="footer">
        <div class="content">
            <?php $currentYear = date('Y'); ?>
            <p>&copy; <?= $currentYear; ?> Chumney & Associates</p>
        </div>
    </footer>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/uikit.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/all.min.js"></script>


   


</body>
</html>




