
        <!--================Footer Area =================-->
        <footer style="padding-bottom: 0px;" class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-12">
        				<aside class="f_widget ab_widget">
						<!--
        					<div class="f_title">
        						<h3>About Us</h3>
        					</div>
						-->
        					<a href="/">
								<img style="width: 250px;" class="hvr-pulse" src="images/logo_white.png" alt="SOUTHPOINTE CAPITAL" id="logo">
							</a>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-12">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Navigation</h3>
        					</div>
        					<div data-aos="zoom-out" style="text-align: left;">
								<a style="color: white;" class="aboutUsMenu">About Us</a><br>
								<a style="color: white;" class="" href="/people">People</a><br>
								<a style="color: white;" class="" href="/portfolio">Portfolio</a><br>
								<a style="color: white;" class="" href="/news">News</a><br>
								<a style="color: white;" class="contactsMenu">Contact</a>
							</div>
        				</aside>
        			</div>
        			<div class="col-lg-2 col-sm-12">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        		<div style="padding-bottom: 50px; color: white; margin-top: 50px; text-align: center;" class="row footer_inner center">
					© 2018 SOUTHPOINTECAPITAL. All Rights Reserved.
				</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->

		
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ url('js/jquery.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/jquery-ui.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/jquery-nice-select.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/popper.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/bootstrap.min.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/stellar.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/simpleLightbox.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/imagesloaded.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/isotope-min.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/owl.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/ajaxchimp.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/waypoints.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/counterup.js?v='.cache("js_version_number").'') }}"></script>
		
		<!--animation-->
        <script src="{{ url('js/animate.js?v='.cache("js_version_number").'') }}"></script>

		<!-- menu -->
        <script src="{{ url('js/menu/global-functions-menu.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/menu/custom-menu.js?v='.cache("js_version_number").'') }}"></script>

        <script src="{{ url('js/theme.js?v='.cache("js_version_number").'') }}"></script>

		<script src="{{ url('js/aos.js?v='.cache("js_version_number").'') }}"></script>
        <script>
          $( document ).ready(function() {
            AOS.init({
              easing: 'ease-in-out-sine'
            });
          });

        </script>
		
		<!--Toastr-->
        <script src="{{ url('js/toastr.js?v='.cache("js_version_number").'') }}"></script>

		<!--Angular-->
        <script src="{{ url('js/angular.min.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/sanitize.min.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/module.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/controllers.js?v='.cache("js_version_number").'') }}"></script>
        <script src="{{ url('js/factory.js?v='.cache("js_version_number").'') }}"></script>

		<!-- Slider -->
		<script src="{{ url('js/slider/slick-animation.js?v='.cache("js_version_number").'') }}"></script>
		<script src="{{ url('js/slider/slick.js?v='.cache("js_version_number").'') }}"></script>
		<script src="{{ url('js/slider/slider.js?v='.cache("js_version_number").'') }}"></script>
		
		
        <script>
            $( document ).ready(function() {
                $(".contactsMenu").click(function() {
					console.log("Click");
					$('html,body').animate({
						scrollTop: $("#contacts").offset().top},
						'slow');
				});

                $(".aboutUsMenu").click(function() {
					console.log("Click");
					$('html,body').animate({
						scrollTop: $("#aboutUs").offset().top},
						'slow');
				});
            });
        
        </script>

		@php

		if(isset($_GET["go"])){
			$scroll = $_GET["go"];
		} else {
			$scroll = "";

		}

		@endphp

		<script>
            $(document).ready(function() {
                // Handler for .ready() called.

                @php

                if($scroll=="aboutUsMenu"){

                    @endphp
                    $('html,body').animate({
						scrollTop: $("#aboutUs").offset().top},
						'slow');
                    @php
                }
                if($scroll=="contactsMenu"){

                    @endphp
                    $('html,body').animate({
						scrollTop: $("#contacts").offset().top},
						'slow');
                    @php
                }

                @endphp
            });
        </script>

    </body>
</html>