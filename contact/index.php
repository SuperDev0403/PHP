<?php 

$seotitle = "Mainello Montage Contact: Our team would love to hear from you!";
$seoDesc  = "We are always on the lookout for new partnership opportunities. If you're interested in collaborating, this is how you get in touch with us.";
$seoKeywords = "Mainello Montage, 801 Barton Springs Rd, Austin, zach@mainellomontage.com";


include $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/functions.php';

inc('header');
?>


<div class="main-container">
    <main>

        <section class="contact-header page_title ls s-py-50 corner-title ls invise overflow-visible">
            <div class="black_background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>CONTACT US</h1>
                            <div class="divider-15 d-none d-xl-block"></div>
                            <p>Our team would love to hear from you! We are always on the lookout for new partnership opportunities. If you're interested in collaborating, this is how you get in touch with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        

        <section class="ls s-pt-30 s-pt-lg-75 s-pb-130 contact4">
            <div class="container">
                <div class="row flexslider">


                    <div class="col-lg-8">
                       
                       
                       
                       
                       
                        <form class="contact-form c-mb-20 c-gutter-15" data-message-success="Thanks! You will recieve a responsve in 24h!" data-message-error="Opps... Something went wrong - please try again later" id="message_form">

                            <div class="row">

                                <div class="col-sm-12">
                                    <h4>Contact Form</h4>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="name">Full Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" size="30" name="name" id="id_msg_name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="phone">Phone
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" size="30" name="phone" id="id_msg_phone" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="email">Email address
                                            <span class="required">*</span>
                                        </label>
                                        <input type="email" size="30" name="email" id="id_msg_email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group has-placeholder">
                                        <label for="message">Message</label>
                                        <textarea rows="6" cols="45" name="message" id="id_msg_content" class="form-control" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>

                            </div>
                            
                            <!--<input type="hidden" name="action" value="submit_new_design">-->

                            <div class="row">
                                <div class="form-group has-placeholder">
                                    <button id="id_send_message" class="btn btn-maincolor btn-block">Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        
                        
                        
                        
                    </div>
                    <!--.col-* -->
                    <div class="col-lg-4">
                        <div>
                            <h4 class="header">
                                Contact Info
                            </h4>

                            <div class="media mb-10">
                                <div class="icon-styled color-main fs-16">
                                    <i class="fa fa-map-marker"></i>
                                </div>

                                <div class="media-body">
                                    <p>
                                        801 Barton Springs Rd, Austin,<br> TX 78704, USA
                                    </p>
                                </div>
                            </div>

                            <div class="media mb-10">
                                <div class="icon-styled color-main fs-16">
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="media-body">
                                    <p>
                                        1-512-227-9462
                                    </p>
                                </div>
                            </div>

                            <div class="media mb-40">
                                <div class="icon-styled color-main fs-16">
                                    <i class="fa fa-pencil"></i>
                                </div>

                                <div class="media-body">
                                    <p class="color-dark">
                                        zach@mainellomontage.com
                                    </p>
                                </div>
                            </div>

                            <h4>Open Hours</h4>


                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="icon-styled color-main fs-16">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            Weekdays
                                        </td>
                                        <td class="color-dark">8AM-8PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icon-styled color-main fs-16">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            Weekends
                                        </td>
                                        <td class="color-dark">10AM-5PM</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <div class="icon-styled color-main fs-16">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            Holidays
                                        </td>
                                        <td class="color-dark">10AM-5PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--.col-* -->
                    <div class="divider-60 d-none d-xl-block"></div>
                </div>
            </div>
        </section>

    </main>
</div>


<?php inc('footer'); ?>
