<?php namespace ProcessWire; ?>

<?php if($page->body): ?>
    <?= $page->body; ?>
<?php endif; ?>




<form class="uk-grid-medium" uk-grid method="post" >
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
        <!--<button type="submit" class="uk-button uk-button-primary">Submit</button>-->
               <input type="submit" class="uk-button uk-button-primary" name="submit">     
    </div>

</form>


<?php 

	if($input->post->submit) {

        // init wireMail
        $mail = wireMail(); 

	    $to = "lstephens@chumneyads.com";			   
	    $fullName = $sanitizer->text($input->post->fullname);
	    $email = $sanitizer->email($input->post->email);
	    $phone = $sanitizer->email($input->post->phone);
	    $comments = $sanitizer->text($input->post->comments);


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


	$numSent = wireMail($to, '', $subject, $body, $options); 

	if($numSent) {
  		$output="Message Sent";
	} else{
  		$output="Message Not Sent";
	
	}

	echo $output;



    }


?>