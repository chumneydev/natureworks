<?php namespace ProcessWire; ?>

<section 
    <?php if($page->access_road): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->access_road as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>

    <?php elseif($page->food_plots): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->food_plots as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->food_plots_hunting): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->food_plots_hunting as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->foresrty_mulcher): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->foresrty_mulcher as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->gant_greenville): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->gant_greenville as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->imports): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->imports as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->land_clearing): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->land_clearing as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->land_management): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->land_management as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->patios): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->patios as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->recreational): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->recreational as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>
    <?php elseif($page->trails): ?>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
            <?php foreach($page->trails as $image): ?>
            <div>
                <a class="uk-inline" href="<?= $image->url; ?>" data-caption="<?= $image->description; ?>"><img src="<?= $image->url; ?>" alt=""></a>
            </div>

            <?php endforeach; ?>
        </div>

    <?php endif; ?>