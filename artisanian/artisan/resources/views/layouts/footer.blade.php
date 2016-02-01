
<!-- Footer -->
<footer class="footer" id="footer">
	<div class="footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<!-- Widget :: Contacts Info -->
					<div class="contacts-widget widget widget__footer">
						<h3 class="widget-title">Contact Us</h3>
						<div class="widget-content">
							<ul class="contacts-info-list">
								<li>
									<i class="fa fa-map-marker"></i>
									<div class="info-item">
										HandyMan Co., Old Town Avenue, New York, USA 23000
									</div>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<div class="info-item">
										+1700 124-5678<br>
										+1700 124-5678
									</div>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<span class="info-item">
										<a href="mailto:info@dan-fisher.com">support@dan-fisher.com</a>
									</span>
								</li>
								<li>
									<i class="fa fa-clock-o"></i>
									<div class="info-item">
										Monday - Friday 9:00 - 21:00
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Widget :: Contacts Info -->
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- Widget :: Latest Posts -->
					<div class="latest-posts-widget widget widget__footer">
						<h3 class="widget-title">Recent Posts</h3>
						<div class="widget-content">
							<ul class="latest-posts-list">
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/post-img1-sm.jpg" alt=""></a></figure>
									<h5 class="title"><a href="#">Three Simple Household Repairs That'll Save You Hundreds</a></h5>
									<span class="date">April, 18 2015</span>
								</li>
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/post-img2-sm.jpg" alt=""></a></figure>
									<h5 class="title"><a href="#">Tools That Make Yard Work Easy: The Big Backpack Blower</a></h5>
									<span class="date">March, 21 2015</span>
								</li>
								<li>
									<figure class="thumbnail"><a href="#"><img src="images/samples/post-img3-sm.jpg" alt=""></a></figure>
									<h5 class="title"><a href="#">11 Tips for Dealing With Water Damage, Mold and Mildew</a></h5>
									<span class="date">March, 21 2015</span>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Widget :: Latest Posts -->
				</div>

				<div class="clearfix visible-sm"></div>

				<div class="col-sm-4 col-md-4">
					<!-- Widget :: Newsletter -->
					<div class="widget_newsletter widget widget__footer">
						<h3 class="widget-title">Get Our Newsletter</h3>
						<div class="widget-content">
							<p>Get timely DIY projects for your home and yard delivered right to your inbox every week!</p>

							<form action="http://handyman.dan-fisher.com/php/newsletter-form.php" method="POST" id="newsletter-form">

								<div class="alert alert-success hidden" id="newsletter-alert-success">
									<strong>Success!</strong> Thank you for subscribing.
								</div>
								<div class="alert alert-danger hidden" id="newsletter-alert-error">
									<strong>Error!</strong> Something went wrong.
								</div>

								<div class="form-group">
									<input type="email" 
									value=""
									data-msg-required="Please enter email address."
									data-msg-email="Please enter a valid email address."
									class="form-control"
									placeholder="Enter your email here..."
									name="subscribe-email"
									id="subscribe-email">
								</div>
								<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /Widget :: Newsletter -->
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					Copyright &copy; 2015  <a href="#">HandyMan</a> &nbsp;| &nbsp;All Rights Reserved
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer / End -->

</div>
<!-- Main / End -->
</div>





	<!-- Javascript Files
	================================================== -->
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery-1.11.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery-migrate-1.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.flexnav.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.hoverIntent.minified.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.flickrfeed.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.isotope.sloppy-masonry.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.fitvids.js') }}"></script
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.stellar.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.countTo.js') }}"></script>

	<!-- Newsletter Form -->
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.validate.js') }}"></script>

	<script type="text/javascript" src="{{ URL::asset('js/notify.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/parsley.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/newsletter.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/formhandler.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/formhandler.js') }}"></script>
	<script>
	$(document).ready(function(e) {

		$(".stepsForm").stepsForm({
			width			:'100%',
			active			:0,
			errormsg		:'Check faulty fields.',
			sendbtntext		:'Create Account',
			posturl			:'core/demo_steps_form.php',
			theme			:'green',
		}); 

		$(".container .themes>span").click(function(e) {
			$(".container .themes>span").removeClass("selectedx");
			$(this).addClass("selectedx");
			$(".stepsForm").removeClass().addClass("stepsForm");
			$(".stepsForm").addClass("sf-theme-"+$(this).attr("data-value"));
		});


		$('#button').click(function () {
			$("input[type='file']").trigger('click');
		})

		$("input[type='file']").change(function () {
			$('.file-input').text(this.value.replace(/C:\\fakepath\\/i, ''))
		})
	});

	jQuery(function($){
		$('#map_canvas').gmap3({
			marker:{
				address: '40.717599,-74.005136' 
			},
			map:{
				options:{
					zoom: 17,
					scrollwheel: false,
					streetViewControl : true
				}
			}
		});

		$('a[title]').tooltip(); 
	});
	</script>
	

</body>
</html>