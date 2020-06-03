<?php
    $navigation = $pages->find('template=home|subpage');
?>

<?php foreach ($navigation as $nav): ?>
    <a class="navbar-item" href="<?= $nav->url; ?>"><?= $nav->title; ?></a>
<?php if($nav->children): ?>
    
    <?php foreach ($nav as $child): ?>
        <a class="navbar-item" href="<?= $nav->url; ?>"><?= $nav->title; ?></a>
    <?php if($nav->children): ?>




<?php endif; ?>
<?php endforeach; ?>

<!-- navigation -->
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


<!-- navigation -->