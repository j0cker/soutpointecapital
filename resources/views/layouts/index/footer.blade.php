
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
						<!--
        					<div class="f_title">
        						<h3>About Us</h3>
        					</div>
						-->
        					<a href="/">
								<img style="width: 250px;" class="hvr-pulse" src="images/logo.png" alt="SOUTHPOINTE CAPITAL" id="logo">
							</a>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Call Us</h3>
        					</div>
        					<div data-aos="zoom-out" style="text-align: left;">
								<a style="box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.3);" class="banner_btn" href="#">Call Us</a>
							</div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
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
                $("#contactsMenu").click(function() {
					$('html,body').animate({
						scrollTop: $("#contacts").offset().top},
						'slow');
				});

                $("#aboutUsMenu").click(function() {
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