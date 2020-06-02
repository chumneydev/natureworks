<section id="testimonials">
    <div class="container">
        <div class="columns">
            <div class="column is 12-desktop is-paddingless slideshow">

            <?php if($page->slideshow): ?>       
            <?php foreach($page->slideshow as $slide): ?>
                <div class="slide">
                    <div class="copy">
                        <?= $slide->body; ?>
                        <a href="<?= $slide->url; ?>" class="button is-primary">> Click for more info</a>
                    </div>
                    <img src="<?= $slide->image->url; ?>" alt="<?= $slide->image->description; ?>" />
                </div>
                <?php endforeach; ?>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>


