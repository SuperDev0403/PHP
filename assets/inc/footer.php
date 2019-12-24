
	<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">
			<div class="container">

			<div class="container">
				<div class="row">
					<div class="divider-20 d-xl-block"></div>
					<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
						<img class="margin-negative" src="/assets/images/footer_logo.png" alt="logo">
						<div class="widget widget_social_buttons">
							<a href="https://www.facebook.com/mainellomontage/" class="fa fa-facebook color-icon" title="facebook"></a>
							<a href="https://www.instagram.com/mainellomontage/" class="fa fa-instagram color-icon" title="instagram"></a>
							<a href="https://www.linkedin.com/company/mainellomontage/" class="fa fa-linkedin color-icon" title="linkedin"></a>
							
						</div>
					</div>
				</div>
			</div>
			</div>
	</footer>


	<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
		<div class="container">
			<div class="row align-items-center">
				<div class="divider-20 d-none d-lg-block"></div>
				<div class="col-md-12 text-center">
					<p>Copyright<span class="copyright_year">2019</span> All Rights Reserved</p><h1 style="font-size: 16px; line-height: 16px;">Mainello Montage</h1>
				</div>
				<div class="divider-20 d-none d-lg-block"></div>
			</div>
		</div>
	</section>



<script src="/assets/js/compressed.js"></script>
<script src="/assets/js/main.js"></script>
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->


<script>

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

$("#id_send_message").click(function() {
    // Hide any previous response text
    var email_txt = $('#id_msg_email').val();
    var name_txt = $('#id_msg_name').val();
    var phone_txt = $('#id_msg_phone').val();
    var content_txt = $('#id_msg_content').val();

    
    var $msgform = $('#message_form');
    $response = '';

     $msgform.children(".alert").remove();
    
    // Are all the fields filled in? 

    if (!name_txt.trim())
    {
        $response = '<div class="alert alert-danger">Please enter your name.</div>';
        $('#id_msg_name').focus();
        $msgform.append($response);
    }
    else if (!phone_txt.trim())
    {
        $response = '<div class="alert alert-danger">Please enter your phone.</div>';
        $('#id_msg_phone').focus();
        $msgform.append($response);
    }
    else if (!email_txt.trim()) {
        $response = '<div class="alert alert-danger">Please enter your email.</div>';
        $('#id_msg_email').focus();
        $msgform.append($response);

    } 
    else if (!validateEmail(email_txt))
    {
        $response = '<div class="alert alert-danger">Please enter correct email format.</div>';
        $('#id_msg_email').focus();
        $msgform.append($response);        
    }
    else if (!content_txt.trim())
    {
        $response = '<div class="alert alert-danger">Please enter your message.</div>';
        $('#id_msg_content').focus();
        $msgform.append($response);
    }

    // Are all the fields filled in? 
    if (email_txt.trim() != "" && name_txt.trim() != "" && phone_txt.trim() != "" && content_txt.trim() != "") 
    {
        // Yes, submit the form to the PHP script via Ajax 
        var all_data = {"email":email_txt, "name":name_txt, "phone":phone_txt, "message":content_txt};
        $.ajax({
            type: "POST",
            url: "/assets/email/method.php",
            data: all_data,
            success: function(msg) {
                if ($.trim(msg) == 'sent') {
                    $response = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
                    
                    $msgform[0].reset();
                } else {
                    //$response = '<div class="alert alert-danger">' + msg + '</div>';
                    $response = '<div class="alert alert-danger">' + msg + '</div>';
                }
                // Show response message
                $msgform.append($response);
                setTimeout(function(){
                  if ($msgform.children(".alert").length > 0) {
                    $msgform.children(".alert").fadeOut('slow');
                  }
                }, 3000);
            }
        });
    }


    return false;
});
</script>

</body>


<!-- Mirrored from webdesign-finder.com/html/dotcreative/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2019 17:23:45 GMT -->
</html>