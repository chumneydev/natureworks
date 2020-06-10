<?php namespace ProcessWire; ?>

<section class="uk-section"> 
    <div class="uk-container">

   <?php if($page->access_road): ?>
        <h2>Access Roads</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->access_road as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if($page->food_plots): ?>
        <h2>Food Plots</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->food_plots as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->food_plots_hunting): ?>
        <h2>Food Plots: Hunting</h2>

        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->food_plots_hunting as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->foresrty_mulcher): ?>
        <h2>Forestry Mulcher</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->foresrty_mulcher as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->gant_greenville): ?>
        <h2>Gannt Greenville</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->gant_greenville as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->imports): ?>
        <h2>Imports</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->imports as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->land_clearing): ?>
        <h2>Land Clearing</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->land_clearing as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->land_management): ?>
        <h2>Land Management</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->land_management as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->patios): ?>
        <h2>Patios</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->patios as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->recreational): ?>
        <h2>Recreational</h2>

        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->recreational as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if($page->trails): ?>
        <h2>Trails</h2>
        <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->trails as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img data-src="<?= $image->url; ?>" alt="" uk-img></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    


    </div>
<section>