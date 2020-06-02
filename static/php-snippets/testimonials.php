<section id="testimonials">
    <div class="container">
        <div class="columns">
            <div class="column is 12-desktop">
                <div class="test">

                <?php if($page->testimonials): ?>       
                <?php foreach($page->testimonials as $testimonial): ?>
                    <div class="testimonial">
                        <div class="testimonial-image">
                            <img src="<?= $testimonial->image->url; ?>" alt="<?= $testimonial->image->description; ?>">
                        </div>
            
                        <div class="testimonial-copy">
                            <h4><?= $testimonial->testimonial_name; ?></h4>    
                            <p><?= $testimonial->testimonial; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</section>


