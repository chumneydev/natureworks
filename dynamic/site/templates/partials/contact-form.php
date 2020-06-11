<?php namespace ProcessWire; ?>

<?php if($page->body): ?>
    <?= $page->body; ?>
<?php endif; ?>




<form class="uk-grid-medium" uk-grid>
    <div class="uk-width-1-1">
        <input class="uk-input" type="text" placeholder="Full Name">
    </div>
                    
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" placeholder="Email Address">
    </div>
                    
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" placeholder="Phone Number">
    </div>

    <div class="uk-width-1-1">
        <input class="uk-textarea" type="text" placeholder="Phone Number">
    </div>

    <div class="uk-width-1-1">
        <button type="submit" class="uk-button uk-button-primary">Submit</button>
    </div>

</form> 
