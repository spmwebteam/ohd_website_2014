<!-- Global Head -->
<?php include('views/partials/globalHead.php'); ?>
<!-- End Global Head -->

<body>
	
	<header>
		
		<!-- Main Navigation -->
		<?php include('views/partials/mainNavigation.php'); ?>
		<!-- End Main Navigation -->

	</header>

	<main role="main">
		
		<section class="home-slider">
			<!-- Home Slider -->
			<div class="flexslider relative mobile-none">
			 	<ul class="slides">
			    	<li class="js-slide--1">
			    		<div class="slide-caption--container">
			    			<div class="wrapper">
			    				<h3 class="slide-caption--heading__top">Wooden Series V</h3>
			    				<h4 class="slide-caption--heading__bottom">Marin, California, est. 2010</h4>
		    				</div>
			    		</div>		      	
			    	</li>
			    	<li class="js-slide--2">
		    			<div class="slide-caption--container">
			    			<div class="wrapper">
			    				<h3 class="slide-caption--heading__top">Test Headline 2</h3>
			    				<h4 class="slide-caption--heading__bottom">Corona, California, est. 2000</h4>
		    				</div>
			    		</div>								      	
			    	</li>			
				</ul>
			</div>
			<!-- End Home Slider -->
		</section>	

		<section class="home-tabs tabs">
			<div class="tabbed-nav--container wrapper">			
				<section class="tabbed-nav--row">
				
					<a data-reveal="tab1" class="is-current tabbed-nav--item gd-quarter gt-quarter" href="#">
						<div class="tabbed-nav--label">Steals & Deals</div>
					</a>
					<a data-reveal="tab2" class="tabbed-nav--item gd-quarter gt-quarter" href="#">
						<div class="tabbed-nav--label">Free Consultation</div>
					</a>
					<a data-reveal="tab3" class="tabbed-nav--item gd-quarter gt-quarter" href="#">
						<div class="tabbed-nav--label">Service & Repair</div>
					</a>
					<a data-reveal="tab4" class="tabbed-nav--item gd-quarter gt-quarter" href="#">
						<div class="tabbed-nav--label">Safety Tips</div>
					</a>						
				</section>				
			</div>
	
			
			<!-- Tab 1 -->
			<section id="tab1" class="tab is-current tabbed-content--container">
				<div class="wrapper">
					<div class="tabbed-content--body gd-row">
						<div class="gd-half gd-columns">
							<img class="mrs mbs" src="http://placeimg.com/801/436/tech">
						</div>
						<div class="gd-half gd-columns">
							<h3 class="tabbed-content--heading great-text">Steals & Deals</h3>
							<p class="primer-text thin mtxs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel pharetra elit. Praesent commodo dictum porta. Proin felis nunc, malesuada a mauris id, cursus blandit lectus. Proin bibendum accumsan arcu vel viverra.</p>
							<a class="button primary small gm-full" href="#"><span class="button--text">Learn More</span></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Tab 1 -->

			<!-- Tab 2 -->
			<section id="tab2" class="tab tabbed-content--container">
				<div class="wrapper">
					<div class="tabbed-content--body gd-row">
						<div class="gd-half gd-columns">
							<img class="mrs mbs" src="http://placeimg.com/801/436/people">
						</div>
						<div class="gd-half gd-columns">
							<h3 class="tabbed-content--heading great-text">Free Consultation</h3>
							<p class="primer-text thin mtxs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel pharetra elit. Praesent commodo dictum porta. Proin felis nunc, malesuada a mauris id, cursus blandit lectus. Proin bibendum accumsan arcu vel viverra.</p>
							<a class="button primary small gm-full" href="#"><span class="button--text">Learn More</span></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Tab 2 -->

			<!-- Tab 3 -->
			<section id="tab3" class="tab tabbed-content--container">
				<div class="wrapper">
					<div class="tabbed-content--body gd-row">
						<div class="gd-half gd-columns">
							<img class="mrs mbs" src="http://placeimg.com/801/436/animals">
						</div>
						<div class="gd-half gd-columns">
							<h3 class="tabbed-content--heading great-text">Service & Repair</h3>
							<p class="primer-text thin mtxs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel pharetra elit. Praesent commodo dictum porta. Proin felis nunc, malesuada a mauris id, cursus blandit lectus. Proin bibendum accumsan arcu vel viverra.</p>
							<a class="button primary small gm-full" href="#"><span class="button--text">Learn More</span></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Tab 3 -->

			<!-- Tab 4 -->
			<section id="tab4" class="tab tabbed-content--container">
				<div class="wrapper">
					<div class="tabbed-content--body gd-row">
						<div class="gd-half gd-columns">
							<img class="mrs mbs" src="http://placeimg.com/801/436/architecture">
						</div>
						<div class="gd-half gd-columns">
							<h3 class="tabbed-content--heading great-text">Safety Tips</h3>
							<p class="primer-text thin mtxs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel pharetra elit. Praesent commodo dictum porta. Proin felis nunc, malesuada a mauris id, cursus blandit lectus. Proin bibendum accumsan arcu vel viverra.</p>
							<a class="button primary small gm-full" href="#"><span class="button--text">Learn More</span></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Tab 4 -->			
		<!--End Tabs-->
		</section>

		<section class="home-showcase">
			<div class="wrapper">
				<hr class="dashed-rule">
				<div class="gd-row gt-row">
					<div class="gd-half gd-columns gt-half gt-columns">
						<section class="home-showcase--container">
							<a class="home-showcase--overlay first">
								<span class="home-showcase--heading petite-text">Garage Doors</span>
								<img class="home-showcase--img" src="http://placeimg.com/801/380/architecture">
							</a>
						</section>
					</div>
					<div class="gd-half gd-columns gt-half gt-columns">
						<section class="home-showcase--container">
							<a class="home-showcase--overlay">
								<span class="home-showcase--heading petite-text">Entry Gates</span>
								<img class="home-showcase--img" src="http://placeimg.com/801/380/people">
							</a>
						</section>
					</div>
				</div>
			</div>
		</section>
		
		<section class="home-projects">
			<div class="home-projects--top">
				<div class="wrapper">
					<h3 class="great-text tertiary-heading white align-center mtn">Commercial Projects</h3>
					<ul class="inline-bulleted-list paragon-text thin align-center">
						<li>Doors</li>
						<li>Dock Levelers</li>
						<li>Access Control</li>
						<li>24 Hr Response</li>
					</ul>
				</div>
			</div>
			<div class="home-projects--bottom">
				<div class="wrapper">
					<div class="gd-row gt-row">
						<div class="gd-half gd-columns gt-half gt-columns">						
								<h3 class="white-text canon-text bold capitalize">Why our customers love us.</h3>
								<p class="block-quote paragon-text thin white-text">I was quite impressed with your employees. Both your sales rep and technician were knowlegable and respectful and made buying my new garage door so easy! Thanks!</p>
								<p class="canon-text mbxs">— Richard K, Simi Valley</p>					
						</div>
						<div class="gd-half gd-columns gt-half gt-columns">
							<img src="http://placeimg.com/800/760/any">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="home-visit">
			<div class="wrapper inner-content">
				<div class="gd-row gt-row">
					<div class="gd-7of12 gd-columns gt-half gt-columns">
						<h3 class="tertiary-heading great-text mtn">Visit Our Showroom</h3>
						<p class="primer-text thin">A special point of pride for us is our garage door showroom.  There is no other garage door display quite like ours in Ventura and Santa Barbara Counties.  Featuring a wide selection of garage doors, you'll have an opportunity to see fully functional garage doors and garage door openers and customize your garage door features before buying.</p>
						<div class="mbs">
							<a class="button primary mrxs gm-full" href="#">Directions</a>
							<a class="button secondary gm-full" href="#">Take Tour</a>
						</div>
					</div>
					<div class="gd-5of12 gd-columns gt-half gt-columns">
						<img src="http://placeimg.com/800/800/architecture">
					</div>
				</div>
			</div>
		</section>

		<section class="home-brands">
			<div class="wrapper pvm">
				<h3 class="home-brands--heading canon-text align-center mtn mbxs">We Carry The Best Brands.</h3>
				<div class="align-center">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
					<img src="http://placehold.it/200x55">
				</div>
			</div>
		</section>



	</main>

	<footer>

		<!-- Footer -->
		<?php include('views/partials/footer.php'); ?>
		<!-- End Footer -->

	</footer>

	<!-- Loading Scripts -->
	<?php include('views/partials/scripts.inc.php'); ?>
	<!-- End Loading Scripts -->

</body>
</html>