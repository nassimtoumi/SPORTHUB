<!DOCTYPE html>
<html lang="zxx">

<?php include 'includes/head.php'?>
<?php session_start();?>

<body id="home">
	<!--================ PRELOADER ================-->
	
<?php include 'includes/preloader.php'?>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	
<?php include 'includes/header.php'?>
	<!-- ============ confirm email ============ -->	
	<?php if (isset($_SESSION['username'])) { ?>
<a  class="btn1">hello <h7 class = "bb"> <?php echo $_SESSION['username']; ?> </h7> , your account has been successfully created .
 please click on the link sent to <h7 class = "bb">  <?php echo $_SESSION['email']; ?>  </h7> to confirm your account . </a>
<?php
unset($_SESSION['username']);
unset($_SESSION['email']);
 }else if (isset($_SESSION['verified'])){ ?>
<a  class="btn1">account verified, thanks ! </a>
 <?php
  }
  unset($_SESSION['verified']);
?>
<!-- ============ confirm email ============ -->
	<!-- =============== HEADER END =============== -->

	<!-- ============ S-CROSSFIT-SLIDER ============ -->
	<section class="s-crossfit-slider">
		<div class="crossfit-slider">
			<div class="crossfit-slide">
				<div class="crossfit-slider-effect effect-1">
					
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.2" style="background-image: url(assets/img/effect-1.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slider-effect effect-2">
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-2.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slide-bg" style="background-image: url(assets/img/slide-1.jpg);"></div>
				<div class="container">
					<div class="crossfit-slide-cover">
						<h2 class="title">push <span>yourself</span></h2>
						<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
					</div>
				</div>
			</div>
			<div class="crossfit-slide">
				<div class="crossfit-slider-effect effect-1">
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.2" style="background-image: url(assets/img/effect-1.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slider-effect effect-2">
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-2.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slide-bg" style="background-image: url(assets/img/slide-2.jpg);"></div>
				<div class="container">
					<div class="crossfit-slide-cover">
						<h2 class="title">push <span>yourself</span></h2>
						<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
					</div>
				</div>
			</div>
			<div class="crossfit-slide">
				<div class="crossfit-slider-effect effect-1">
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.2" style="background-image: url(assets/img/effect-1.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slider-effect effect-2">
					<div data-hover-only="true" class="scene">
						<span class="scene-item" data-depth="0.4" style="background-image: url(assets/img/effect-2.svg);"></span>
					</div>
				</div>
				<div class="crossfit-slide-bg" style="background-image: url(assets/img/slide-3.jpg);"></div>
				<div class="container">
					<div class="crossfit-slide-cover">
						<h2 class="title">push <span>yourself</span></h2>
						<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-navigation">
			<div class="container">
				<div class="slider-navigation-cover"></div>
			</div>
		</div>
	</section>
	<!-- ========== S-CROSSFIT-SLIDER END ========== -->

	<!-- ================ S-CROSSFIT ================ -->
	<section class="s-crossfit">
		<div class="container">
			<img src="assets/img/placeholder-all.png" data-src="assets/img/group-circle-2.svg" alt="img" class="crossfit-icon-1 rx-lazy">
			<img src="assets/img/placeholder-all.png" data-src="assets/img/line-red-1.svg" alt="img" class="crossfit-icon-2 rx-lazy">
			<img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-about-top.svg" alt="img" class="crossfit-icon-3 rx-lazy">
			<h2 class="title-decor">Welcome To <span>Crossfit</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-md-4 crossfit-col">
					<div class="crossfit-item">
						<img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-1.svg" alt="img">
						<h3>body bulding</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						<a class="btn" href="program.html">view Schedule</a>
					</div>
				</div>
				<div class="col-md-4 crossfit-col">
					<div class="crossfit-item">
						<img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-2.svg" alt="img">
						<h3>group workouts</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						<a class="btn" href="program.html">view Schedule</a>
					</div>
				</div>
				<div class="col-md-4 crossfit-col">
					<div class="crossfit-item">
						<img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-3.svg" alt="img">
						<h3>boxing</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						<a class="btn" href="program.html">view Schedule</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== S-CROSSFIT END ============== -->

	<!-- ============== S-OUR-PROGRAMS ============== -->
	<section class="s-our-programs" style="background-image: url(assets/img/bg-programs.jpg);">
		<div class="mask"></div>
		<div class="our-programs-effect" style="background-image: url(assets/img/bg-programs.svg);"></div>
		<div class="container">
			<h2 class="title-decor">Our <span>Programs</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-sm-6 col-md-3 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(assets/img/programs-1.jpg);">
							<div class="program-item-inner">
								<h3>Personal trainer</h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(assets/img/programs-1.jpg);">
							<div class="program-item-inner">
								<h3>Personal trainer</h3>
								<a href="program.html" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(assets/img/programs-2.jpg);">
							<div class="program-item-inner">
								<h3>Free workout</h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(assets/img/programs-2.jpg);">
							<div class="program-item-inner">
								<h3>Free workout</h3>
								<a href="program.html" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(assets/img/programs-3.jpg);">
							<div class="program-item-inner">
								<h3>CrossFit</h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(assets/img/programs-3.jpg);">
							<div class="program-item-inner">
								<h3>CrossFit</h3>
								<a href="program.html" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(assets/img/programs-4.jpg);">
							<div class="program-item-inner">
								<h3>Martial Arts</h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(assets/img/programs-4.jpg);">
							<div class="program-item-inner">
								<h3>Martial Arts</h3>
								<a href="program.html" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-OUR-PROGRAMS END ============ -->

	<!-- =============== S-OUT-TRAINER =============== -->
	<section class="s-out-trainer" style="background-image: url(assets/img/bg-contacts.svg);">
		<div class="container">
			<h2 class="title-decor">Our <span>Trainer</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="trainer.html" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/trainer-1.jpg" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="trainer.html">Sam piters</a></h3>
							<div class="prof">Weightlifting</div>
							<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="trainer.html" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/trainer-2.jpg" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="trainer.html">kim piters</a></h3>
							<div class="prof">Weightlifting</div>
							<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="trainer.html" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/trainer-3.jpg" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="trainer.html">Samanta piters</a></h3>
							<div class="prof">Weightlifting</div>
							<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="trainer.html" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/trainer-4.jpg" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="trainer.html">artur piters</a></h3>
							<div class="prof">Weightlifting</div>
							<p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============= S-OUT-TRAINER END ============= -->

	<!-- ============ S-CROSSFIT-BANNER ============ -->
	<section class="s-crossfit-banner">
		<div class="crossfit-banner-left" style="background-image: url(assets/img/crossmax-2.jpg);"></div>
		<div class="crossfit-banner-right">
			<div class="text-top">open</div>
			<h2>crossmax</h2>
			<div class="text-bottom">free open <a href="program.html">training</a></div>
		</div>
	</section>
	<!-- ========== S-CROSSFIT-BANNER END ========== -->

	<!-- ============== S-CLUB-CARDS ============== -->
	<section class="s-club-cards">
		<div class="container">
			<h2 class="title-decor">Club <span>Cards</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-md-4 club-card-col">
					<div class="club-card-item" style="background-image: url(assets/img/bg-price-1.svg);">
						<div class="price-cover">
							<div class="price">40</div>
							<div class="date"><span>99</span>3 months</div>
						</div>
						<ul class="list">
							<li>Maecenas consequat</li>
							<li>ex id lobortis venenatis</li>
							<li>Mauris id erat enim</li>
							<li class="item-excluded">Morbi dolor dolortin</li>
							<li class="item-excluded">lorem ut, venenatis dapibus mi</li>
						</ul>
						<a href="program.html" class="btn">order now</a>
					</div>
				</div>
				<div class="col-md-4 club-card-col">
					<div class="club-card-item" style="background-image: url(assets/img/bg-price-2.svg);">
						<div class="price-cover">
							<div class="price">70</div>
							<div class="date"><span>99</span>6 months</div>
						</div>
						<ul class="list">
							<li>Maecenas consequat</li>
							<li>ex id lobortis venenatis</li>
							<li>Mauris id erat enim</li>
							<li>Morbi dolor dolortin</li>
							<li class="item-excluded">lorem ut, venenatis dapibus mi</li>
						</ul>
						<a href="program.html" class="btn">order now</a>
					</div>
				</div>
				<div class="col-md-4 club-card-col">
					<div class="club-card-item" style="background-image: url(assets/img/bg-price-3.svg);">
						<div class="price-cover">
							<div class="price">120</div>
							<div class="date"><span>99</span>1 year</div>
						</div>
						<ul class="list">
							<li>Maecenas consequat</li>
							<li>ex id lobortis venenatis</li>
							<li>Mauris id erat enim</li>
							<li>Morbi dolor dolortin</li>
							<li>lorem ut, venenatis dapibus mi</li>
						</ul>
						<a href="program.html" class="btn">order now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-CLUB-CARDS END ============ -->

	<!-- ============== S-TESTIMONIALS ============== -->
	<section class="s-testimonials" style="background-image: url(assets/img/bg-testimonials.jpg);">
		<div class="mask"></div>
		<img class="testimonials-effect" src="assets/img/bg-testimonials.svg" alt="effect">
		<div class="container">
			<div class="testimonials-slider">
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="assets/img/testimonials-1.png" alt="img">
					<h3 class="name">Anna Piters</h3>
					<div class="prof">our client</div>
				</div>
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="assets/img/testimonials-2.png" alt="img">
					<h3 class="name">Mark Klark</h3>
					<div class="prof">our client</div>
				</div>
				<div class="testimonial-slide">
					<p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
					<img src="assets/img/testimonials-3.png" alt="img">
					<h3 class="name">Kat Smith</h3>
					<div class="prof">our client</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-TESTIMONIALS END ============ -->

	<!--================ RELATED POSTS ================-->
	<section class="s-related-posts home-related-posts">
		<div class="container">
			<h2 class="title-decor">Latest <span>News</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="row">
				<div class="col-md-6 related-post-col">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="related-post-categ">fitness</div>
							<div class="post-thumbnail">
								<a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-4.jpg" alt="img"></a>
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
							</div>
							<h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
							</div>
							<a href="single-blog.html" class="btn"><span>read more</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 related-post-col">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="related-post-categ">lifting</div>
							<div class="post-thumbnail">
								<a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-1.jpg" alt="img"></a>
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
							</div>
							<h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
							</div>
							<a href="single-blog.html" class="btn"><span>read more</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 related-post-col">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="related-post-categ">fitness</div>
							<div class="post-thumbnail">
								<a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-3.jpg" alt="img"></a>
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
							</div>
							<h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
							</div>
							<a href="single-blog.html" class="btn"><span>read more</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 related-post-col">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="related-post-categ">lifting</div>
							<div class="post-thumbnail">
								<a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-2.jpg" alt="img"></a>
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
							</div>
							<h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
							</div>
							<a href="single-blog.html" class="btn"><span>read more</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--============== RELATED POSTS END ==============-->

	<!-- =========== S-TRAINING-SCHEDULE =========== -->
	<section class="s-training-schedule" style="background-image: url(assets/img/bg-table-1.svg);">
		<div class="container">
			<h2 class="title-decor">Training <span>Schedule</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div class="training-schedule-cover">
				<h3 class="training-schedule-top">1-7 APRIL, 2019</h3>
				<div class="training-schedule-table">
					<table>
						<thead>
							<th></th>
							<th>monday</th>
							<th>tuesday</th>
							<th>wednesday</th>
							<th>thursday</th>
							<th>friday</th>
							<th>saturday</th>
							<th>sunday</th>
						</thead>
						<tbody>
							<tr>
								<td>9-00</td>
								<td>
									<h4>body bulding</h4>
									<div class="date">9-00 – 11:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
								<td>
									<h4>boxing</h4>
									<div class="date">9-00 – 11:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
								<td>
									<h4>boxing</h4>
									<div class="date">9-00 – 11:00</div>
									<div class="name">Mark Klark</div>
								</td>
							</tr>
							<tr>
								<td>10-00</td>
								<td></td>
								<td>
									<h4>yoga</h4>
									<div class="date">10-00 – 12:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
								<td>
									<h4>body bulding</h4>
									<div class="date">10-00 – 12:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11-00</td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<h4>body bulding</h4>
									<div class="date">11-00 – 12:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td>
									<h4>body bulding</h4>
									<div class="date">11-00 – 12:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>12-00</td>
								<td>
									<h4>body bulding</h4>
									<div class="date">12-00 – 13:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td>
									<h4>karate</h4>
									<div class="date">12-00 – 13:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<h4>karate</h4>
									<div class="date">12-00 – 13:00</div>
									<div class="name">Mark Klark</div>
								</td>
							</tr>
							<tr>
								<td>13-00</td>
								<td></td>
								<td>
									<h4>body bulding</h4>
									<div class="date">13-00 – 14:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
								<td>
									<h4>body bulding</h4>
									<div class="date">13-00 – 14:00</div>
									<div class="name">Mark Klark</div>
								</td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-TRAINING-SCHEDULE END ========= -->

	<!-- ================== FOOTER ================== -->
	<section class="s-counter" style="background-image: url(assets/img/bg-2.jpg);">
		<div class="mask"></div>
		<div class="container">
			<h2 class="title-decor">CrossFit <span>Competitions</span></h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
			<div id="clockdiv">
				<div class="clock-item">
					<span class="days"></span>
					<div class="smalltext">Days</div>
				</div>
				<div class="clock-item">
					<span class="hours"></span>
					<div class="smalltext">Hours</div>
				</div>
				<div class="clock-item">
					<span class="minutes"></span>
					<div class="smalltext">Minutes</div>
				</div>
				<div class="clock-item">
					<span class="seconds"></span>
					<div class="smalltext">Seconds</div>
				</div>
			</div>
			<form class="subscribe-form">
				<input class="inp-form" type="email" name="subscribe" placeholder="Your E-mail">
				<button type="submit" class="btn">Subscribe</button>
			</form>
		</div>
	</section>
	<!-- ================== FOOTER ================== -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 footer-item-logo">
					<a href="index.html" class="logo-footer"><img src="assets/img/logosporthub.png" width="70" height="80" alt="logo"></a>
					<p>The best website you will make an awsome body</p>
					<ul class="social-list">
						<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item footer-item-list">
					<h3>Links</h3>
					<ul class="footer-link">
						<li><a href="#">Posts</a></li>
						<li><a href="#">Comments</a></li>
						<li><a href="#">Questions</a></li>
						<li><a href="#">Answers</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item">
					<h3>Contact us</h3>
					<ul class="footer-cont">
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+216 29 269 424">29 269 424</a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="nassim.toumi@esprit.tn">nassim.toumi@esprit.tn</a></li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#col-sm-6 col-lg-3 footer-item">Aryanah,Tunis</a></li>
					</ul>
				</div>
				
			</div>
			<div class="footer-bottom">
				<div class="copyright"><a href="#" target="_blank"></a></div>
				<ul class="footer-menu">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="Forum.html">Forum</a></li>
					<li><a href="Signup.html">Sign up</a></li>
					<li><a href="Signin.html">Sign in</a></li>
					<li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<!-- ================ FOOTER END ================ -->
	
	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/rx-lazy.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>