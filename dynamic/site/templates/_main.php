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

    <!-- header -->
    <header class='uk-background-muted'>
	    <nav id='masthead-navbar' class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="text-logo uk-text-primary" href="#">C &amp; S Natureworks</a>
            </div>
		    <div class="uk-navbar-right uk-visible@m">
			    <?=ukNavbarNav($home->and($home->children), [ 
				    'dropdown' => [ 'basic-page', 'categories' ]
                    ])
                ?>
		    </div>
	    </nav>
    </header>
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
            <?= $email; ?>
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


    <!-- testimonials -->
    <section id="testimonials" class="uk-section">
        <div class="uk-container">

        </div>
    </section>
    <!-- testimonials -->




                    
    <!-- footer-top -->
    <section id="footer-top" class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@m uk-grid-large uk-grid-match uk-vertical-align uk-flex uk-flex-center uk-flex-middle" uk-grid>
                <div class="uk-vertical-align-middle">
                    <p class="logo-text"><?= $store; ?></p>
                </div>
                <div class="uk-vertical-align-middle">
                    <img src="<?= $logo->url; ?>" alt="<?= $logo->description; ?>" class="logo-image" />
                </div>
                <div class="uk-vertical-align-middle"></div>

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
                    <?= $counties; ?>
                    <?= $cities; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- areas -->




	<!-- footer -->
	<footer id='footer'>
	</footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/uikit.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/all.min.js"></script>


   


</body>
</html>
