<!DOCTYPE html>
<html lang="zxx">

<?php 
session_start();
include 'includes/head.php'?>
<body id="home">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
		<div id="cube-loader">
			<div class="caption">
				<div class="cube-loader">
					<div class="cube loader-1"></div>
					<div class="cube loader-2"></div>
					<div class="cube loader-4"></div>
					<div class="cube loader-3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	
<?php include 'includes/header.php'?>
	<!-- =============== HEADER END =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	<section class="s-header-title" style="background-image: url(assets/img/bg-1-min.png);">
		<div class="container">
			<h1 class="title">Forum</h1>
			<ul class="breadcrambs">
				<li><a href="index-2.html">Home</a></li>
				<li>Forum</li>
			</ul>
		</div>
	</section>
	<!-- ============= HEADER-TITLE END ============= -->

	<!--===================== S-NEWS =====================-->
	<section class="s-news">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-9 blog-cover">
					<div class="post-item-cover">
						<div class="post-header">
							
						</div>
						<h2 class="title">Ask question </h2>
						<form action="https://fitmax-html.rovadex.com/">
							<ul class="form-cover">
								<li class="inp-name">
									<label>Name * (required)</label>
									<input type="text" name="your-name">
								</li>
								<li class="inp-email">
									<label>E-mail * (required)</label>
									<input type="email" name="your-email">
								</li>
								<li class="inp-text">
									<label>Message * (required)</label>
									<textarea name="your-text"></textarea>
								</li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox">
									<p>By using this form you agree with the storage and handling of your data by this website.</p>
								</div>
							</div>
							<div class="btn-form-cover">
								<button type="submit" class="btn">Ask question</button>
							</div>
						</form>
						<div class="post-content">
							<br/>
							<hr> 
							<br/>
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
								<span class="post-category"><i class="fa fa-tag" aria-hidden="true"></i><a href="#">Fitness</a></span>
							</div>
							<h2 class="title"><a href="Answers.php">Sujet post</a></h2>
							<div class="text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt...</p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-comment"><i class="fa fa-thumbs-up" aria-hidden="true"></i><a href="#">Like</a></span>
								<span class="post-comment"><i class="fa fa-thumbs-down" aria-hidden="true"></i><a href="#">Unlike</a></span>
								<span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
								<span class="post-comment"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><a href="#">Report</a></span>
								<span class="post-comment"><i class="fa fa-bookmark" aria-hidden="true"></i><a href="#">Bookmark</a></span>
							</div>
							<a href="Answers.php" class="btn"><span>read more</span></a>
						</div>
					</div>
					<div class="post-item-cover">
						<div class="post-header">
							<div class="post-thumbnail">
								<!----here--->
							</div>
						</div>
						
						<div class="post-footer">
							
						</div>
					</div>
				</div>
				<!--================= SIDEBAR =================-->
				<?php include'includes/sidebar.php'?>
				<!--=============== SIDEBAR END ===============-->
			</div>
		</div>
	</section>
	<!--=================== S-NEWS END ===================-->

	<!-- ================== FOOTER ================== -->
	<?php include 'includes/footer.php'?>
	<!-- ================ FOOTER END ================ -->

	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>

</html>