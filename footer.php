 <!-- start of footer -->
    <footer>
        <div class="container">

            <div class="col-lg-3 col-md-4 col-sm-5 padding-left0 hidden-xs">
               <p class="lg color-yellow">Modern Softwares © 2017</p>
            </div>

            <div class="col-lg-6 col-lg-offset-3 col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-0 col-xs-12 padding-right0">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a class="color-yellow lg" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="color-yellow lg" href="services.php">Services</a>
                    </li>
                    <li>
                        <a class="color-yellow lg" href="about-us.php">About</a>
                    </li>
                    <li>
                        <a class="color-yellow lg" href="portfolio.php">Portfolio</a>
                    </li>
                    <li>
                        <a class="color-yellow lg" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 visible-xs">
               <p class="lg color-yellow">Modern Softwares © 2017</p>
            </div>
        </div>
    </footer>
   <!-- end of footer -->
    <script src="js/jquery.js"></script>
    
    <script src="js/aos.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   
    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min_optimized.js"></script>
   
      <!-- mcafee security -->
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

   <!-- contact us form --> 
   <!--<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
   <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
   <script src="js/validator.js"></script>
   <script src="js/contact.js"></script>
   <!-- End of contact us form --> 


    
    <!-- script for shrink header on scroll -->
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                $('header').removeClass('shrink');

                if ($(document).scrollTop() > 50) {
                    $('header').addClass('shrink');
                }

                else {
                    $('header').removeClass('shrink'); 
                }
            });
        });
    </script>
   
    <!-- script for bx-slider in 'our-work' section -home page-->
    <script type="text/javascript">
        $(document).ready(function(){
            var maxSlides,
            
            width = $(window).width();
            if (width <= 1024) {
                maxSlides = 1;
            }

            else {
                maxSlides = 2;
            }

        $('.our-work-slider').bxSlider({
            slideWidth: 480,
            minSlides: 1,
            maxSlides: 2,
            moveSlides: 1,
            slideMargin: 20,
            auto: true,
            autoControls: false,  
            pager : false,
            nextText: '<img src="img/right-arrow.png" height="24" width="12"/>',
            prevText: '<img src="img/left-arrow.png" height="24" width="12"/>'
            });
        });
    </script>

    <!-- script for bx-slider in 'our-work' section - technology-more-page-->
    <script type="text/javascript">
        $(document).ready(function(){
            var maxSlides,
            
            width = $(window).width();
            if (width <= 480) {
                maxSlides = 1;
            }

            else {
                maxSlides = 3;
            }

        $('.our-work-slider1').bxSlider({
            slideWidth: 400,
            minSlides: 1,
            maxSlides: 3,
            moveSlides: 1,
            slideMargin: 0,
            auto: true,
            autoControls: false,  
            pager : false,
            nextText: '<img src="img/right-arrow.png" height="24" width="12"/>',
            prevText: '<img src="img/left-arrow.png" height="24" width="12"/>'
            });
        });
    </script>

    <!-- for down arrow scroll to next section -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('html, body').animate({scrollTop: 0}, 1000);
        });

        $(document).ready(function(){
            $(".down-arrow").click(function() {
                $('html,body').animate({
                scrollTop: $("#section1").offset().top-70},
                'slow');
            });
        });
      </script>

    <!-- script for aos -->
    <script>
        AOS.init();
    </script>

    <!-- script for "to show specific tab active with link from home page section-1(MS-technology)" -->
    <script>
        $(document).ready(function(){
            //Manage hash in URL to open the right pill
                var hash = window.location.hash;
                    console.log(hash);
                // If a hash is provided 
                if(hash && hash.length>0)
                    {
                        // Manage Pill titles
                        $('ul.nav-tabs li a').each(function( index ) {
                            if($(this).attr('href')==hash){
                                $(this).parent('li').addClass('active');
                              }
                            else
                                $(this).parent('li').removeClass('active');
                        });
                // Manage Tab content
                var hash = hash.substring(1); // Remove the #
                $('div.tab-content .tab-pane').each(function( index ) {
                    if($(this).attr('id')==hash){
                        $(this).addClass('active');
                        $(this).addClass('in');
                      }
                    else{
                        $(this).removeClass('active');
                        $(this).removeClass('in');
                      }
                });
            }
        })
    </script>

    <!-- script for "to show specific tab active with link from home page our-services section" -->
    <script>
        $(document).ready(function(){
        
        
            //Manage hash in URL to open the right pill
                var hash = window.location.hash;
                    console.log(hash);
                // If a hash is provided 
                if(hash && hash.length>0)
                    {
                        // Manage Pill titles
                        $('ul.nav-tabs li a').each(function( index ) {
                            if($(this).attr('href')==hash){
                                $(this).parent('li').addClass('active');
                              }
                            else
                                $(this).parent('li').removeClass('active');
                        });
                // Manage Tab content
                var hash = hash.substring(1); // Remove the #
                $('div.tab-content .tab-pane').each(function( index ) {
                    if($(this).attr('id')==hash){
                        $(this).addClass('active');
                        $(this).addClass('in');
                      }
                    else{
                        $(this).removeClass('active');
                        $(this).removeClass('in');
                      }
              
               });
            }
        })
    </script>
    
	<!-- ClickDesk Live Chat Service for websites -->
	<script type='text/javascript'>
	var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyEgsSBXVzZXJzGICAoJ21u_IKDA');
	var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
	'http://my.clickdesk.com/clickdesk-ui/browser/');
	var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
	var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
	glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
	var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
	</script>
	<!-- End of ClickDesk -->
	
    
</body>
</html>