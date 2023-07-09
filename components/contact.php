<?php
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sendMail = mail('elepacksiltd@gmail.com', $subject, $message);
        if ($sendMail) {
            echo "<script>alert('Message sent! We'll reply as soon as possible')</script>";
        } else {
            echo "<script>alert('Failed to send message! Plese try again')</script>";
        }
    }
?>
<section id="contact" class="contact-area contact-bg pt-95 pb-95 p-relative fix" style="background-image:url(img/bg/contact_bg.png); background-size: cover;background-repeat: no-repeat;">
    <div class="container">
    
        <div class="row">
            <div class="col-lg-5">
            <div class="section-title mb-60 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <span>Contact</span>
                    <h2>Get In Touch</h2>
                </div>
            <form action="" method="post" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                <div class="row">
                <div class="col-lg-12">
                    <div class="contact-field p-relative c-name mb-20">                                    
                        <input type="text" required name="fullname" placeholder="Enter fullname">
                    </div>                               
                </div>
                <div class="col-lg-12">                               
                    <div class="contact-field p-relative c-email mb-20">                                    
                        <input type="email" required name="email" placeholder="Enter your email">
                    </div>                                
                </div>
                <div class="col-lg-12">                               
                    <div class="contact-field p-relative c-subject mb-20">                                   
                        <input type="text" required name="subject" placeholder="I would like to discuss">
                    </div>
                </div>							
                <div class="col-lg-12">
                    <div class="contact-field p-relative c-message mb-45">                                  
                        <textarea required name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                    </div>
                    <div class="slider-btn">                                          
                                <input type="submit" name="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" value="Send Message" />					<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
                            </div>                             
                </div>
                </div>
            
        </form>
            </div>
        </div>
        
    </div>
    
</section>