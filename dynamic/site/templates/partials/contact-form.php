<?php namespace ProcessWire; ?>

<?php if($page->body): ?>
    <?= $page->body; ?>
<?php endif; ?>




<form class="uk-grid-medium" uk-grid>
    <div class="uk-width-1-1">
        <input name="fullname" class="uk-input" type="text" placeholder="Full Name">
    </div>
                    
    <div class="uk-width-1-2@s">
        <input name="email" class="uk-input" type="text" placeholder="Email Address">
    </div>
                    
    <div class="uk-width-1-2@s">
        <input name="phone" class="uk-input" type="text" placeholder="Phone Number">
    </div>

    <div class="uk-width-1-1">
        <textarea name="comments" class="uk-textarea" placeholder="Comments"></textarea>
    </div>

    <div class="uk-width-1-1">
        <button type="submit" class="uk-button uk-button-primary">Submit</button>
    </div>

</form> 


<?php

	if(isset($_POST['submit'])) {

        // init wireMail
        $mail = wireMail(); 

	    $client = $email;			   
	    $fullName = $sanitizer->text($input->post->fullname);
	    $email = $sanitizer->email($input->post->email);
	    $phone = $sanitizer->email($input->post->phone);
	    $comments = $sanitizer->email($input->post->comments);


        $subject = $page->title;

        $body = "
        	Name: $fullName
	        Email: $email
	        Phone: $phone
	        Comments: $comments
        ";

	    $options = array(
		    'sendSingle' => true,
		    //'cc' => $email_recipient[1]
	    );





    }


?>