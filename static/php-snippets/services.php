    <!-- services -->
    <section id="services">
        <div class="container">
            <div class="columns">
                <div class="column is-12-desktop is-12-mobile has-text-centered">
                    <h2 class="is-size-3">Our Services</h2>
                </div>
            </div>


            <div class="columns">
                
                <div class="column is-4-desktop is-12-mobile">

                <?php if($page->services): ?>
                <?php foreach($page->services as $service): ?>    

                <?php if($service->secondary == true): ?>

                
                    <div class="card has-background-secondary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="<?= $service->image->url; ?>" alt="<?= $service->image->description; ?>">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                            <h2 class="is-size-4"><?= $service->title; ?></h2>
                                <p><?= $service->description; ?></p>
                            </div>
                        </div>
                        <a href="<?= $service->url; ?>" class="button is-primary service-btn">> Click for more info</a>
                    </div>




                <?php else: ?>
                
                    <div class="card has-background-primary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="<?= $service->image->url; ?>" alt="<?= $service->image->description; ?>">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                            <h2 class="is-size-4"><?= $service->title; ?></h2>
                                <p><?= $service->description; ?></p>
                            </div>
                        </div>
                        <a href="<?= $service->url; ?>" class="button is-secondary service-btn">> Click for more info</a>
                    </div>


                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>


                    <div class="card has-background-primary has-text-white">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content">
                            <h2 class="is-size-4">Land Management</h2>
                                <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.</p>
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
                                <h2 class="is-size-4">Wildlife Removal</h2>
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
                                <h2 class="is-size-4">Pond & Water Features</h2>
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
