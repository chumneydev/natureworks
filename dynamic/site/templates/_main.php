<?php namespace ProcessWire;

$home = pages()->get('/'); // homepage
$siteTitle = 'Regular';	
$siteTagline = $home->summary;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $title; ?></title>
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



    <!-- services -->
    <section id="services" class="uk-section">
        <div class="uk-container">
            <h2>Our Services</h2>
            
            <div class="uk-child-width-1-3@m uk-grid-large uk-grid-match" uk-grid>
            
            <?php if($page->services): ?>
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
                        <a href="<?= $service->service_info->url ?>" class="uk-button uk-button-primary service-btn">> Click for more info</a>

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
                        <a href="<?= $service->service_info->url ?>" class="uk-button uk-button-secondary service-btn">> Click for more info</a>

                    </div>
                </div>
                
                

            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>

            </div>        

        </div>
    </section>
    <!-- services -->


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
            <div uk-grid>

                    <div class="uk-width-auto@m">

                    <div id="slider" uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container">
                                <ul class="uk-slider-items">
                                    <li>Hey</li>
                                    <li>Hey</li>
                                    <li>Hey</li>
                                </ul>
                            </div>

                            <a class="uk-position-center-left-out" href="#" uk-slider-item="previous">...</a>
                            <a class="uk-position-center-right-out" href="#" uk-slider-item="next">...</a>
                        </div>
                    <ul class="uk-slider-nav uk-dotnav"></ul>

            </div>






                    </div> 



            </div>
        </div>
    </section>
    <!-- testimonials -->










	<!-- footer -->
	<footer id='footer'>
	</footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/uikit.min.js"></script>
        <script src="<?php echo $config->urls->templates?>scripts/all.min.js"></script>


        <script type="text/javascript">
            UIkit.slider("#slider", {
                    autoplay: true,
                    center: true,
                });
        
        </script>


</body>
</html>
