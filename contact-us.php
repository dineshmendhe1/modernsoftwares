<?php include 'header.php'; ?>

    <!-- start of banner contact-us page -->
    <div class="contact-us-banner bg-image link-page-banner">
        <div class="container">
            <div class="arrow bounce">
                <a class="down-arrow" href="#"><span class="ms-down-arrow color-white"></span></a>
            </div>
        </div>
    </div>
    <!-- end of banner contact-us page -->

    <!-- start of contact-us page form section  -->
    <section class="contact-us-form padding-top-bot" id="section1">
        <div class="container">
            <!-- heading -->
            <h2 class="text-center">Contact Us</h2>

            <!-- form -->
            <div class="col-md-10 col-md-offset-1 col-sm-12">
               <form id="contact-form" method="post" action="contact.php" role="form" class="col-xs-12">
               
               <div class="messages"></div>

                <div class="controls"> 

                    <div class="col-sm-6">
                        <input type="text" id="form_name" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-sm-6">
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." /> 
                        <div class="help-block with-errors"></div>              
                    </div>
                    <div class="col-sm-6">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." /> 
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-sm-6">
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-sm-12">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- button -->
                    <div class="col-sm-12">
                         <!--<div class="btn-yellow MS-button send-btn"> -->
                            <div class="eff-btn MS-eff"></div>
                            <input  style="background-color: #e2bf04"type="submit" class="btn btn-success btn-send" value="SEND" />
                        <!-- </div> -->
                    </div>

                </div>
               </form>
            </div>
        </div>
    </section>
    <!-- end of contact-us page form section  -->

    <!-- start of contact-details section contact-us page -->
    <section class="contact-details padding-top-bot grey-section">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <!-- address -->
                <div class="col-sm-4 col-xs-12 text-center contact-detail-div" data-aos="zoom-out-up">
                    <p><span class="ms-signs"></span></p>
                    <br>
                    <p class="sm">
                        Modern Softwares LLC,<br>
                        1492 East Main Street, Shrub Oak,<br> 
                        NY 10588
                    </p>
                </div>
                
                <!-- email -->
                <div class="col-sm-4 col-xs-12 text-center contact-detail-div" data-aos="zoom-out-up">
                    <p><span class="ms-domain-registration"></span></p>
                    <br>
                    <p class="sm"><a href="javascript:void(0)" class="contact-us-email">info@modernsoftwares.com</a></p>
                </div>

                <!-- contact-number -->
                <div class="col-sm-4 col-xs-12 text-center" data-aos="zoom-out-up">
                    <p><span class="ms-technology"></span></p>
                    <br>
                    <p class="sm">+1 (845) 244-1550</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact-details section contact-us page -->

<?php include 'footer.php'; ?>

<!-- Google Search -->
	<script>
	  (function() {
	    var cx = '015130371190315255486:9vk2sgnden0';
	    var gcse = document.createElement('script');
	    gcse.type = 'text/javascript';
	    gcse.async = true;
	    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(gcse, s);
	  })();
	</script>
	<gcse:search></gcse:search>
<!-- end of google search -->