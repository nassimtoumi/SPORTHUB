<?php
require '../Controller/replyC.php';
//require_once '../config.php';
$replyC = new replyC();
$listreplys=$replyC->afficherReply();
?>


<!DOCTYPE html>
<html lang="zxx">

	<?php
	 session_start();
	 include 'includes/head.php'?>

<body id="home">
	<!--================ PRELOADER ================-->
	<?php include 'includes/preloader.php'?>
	<!--============== PRELOADER END ==============-->
	
	<!-- ================= HEADER ================= -->
	<?php include 'includes/header.php'?>
	<!-- =============== HEADER END =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	<section class="s-header-title" style="background-image: url(assets/img/bg-1-min.png);">
		<div class="container">
			<h1 class="title">Forum</h1>
			<ul class="breadcrambs">
				<li><a href="index.html">Home</a></li>
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
					<!--================ NAVIGATION ================-->
					<div class="navigation">
						<a href="Forum.html" class="navigation-item navigation-left">
							<span>previous</span>
							<div class="title">Back to posts</div>
						</a>
					</div>
					<!--============== NAVIGATION END ==============-->
					<div class="post-item-cover">
						<div class="post-header">
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
								<span class="post-category"><i class="fa fa-tag" aria-hidden="true"></i><a href="#">Fitness</a></span>
							</div>
							<h2 class="title">Sed ut perspiciatis unde omnis</h2>
							<div class="text">
								<p>Cras pulvinar mattis nunc sed blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Amet consectetur adipiscing elit pellentesque. Ultricies tristique nulla aliquet enim tortor.</p>
								<p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Amet consectetur adipiscing elit pellentesque.</p>
								<p>Non odio euismod lacinia at quis. Auctor augue mauris augue neque gravida. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar. In tellus integer feugiat scelerisque varius morbi enim. Fringilla ut morbi tincidunt augue interdum velit. Est velit egestas dui id ornare arcu odio. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Amet massa vitae tortor condimentum lacinia quis vel. Ut tellus elementum sagittis vitae et</p>
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
						</div>
					</div>
					<!--=============== AUTOR-COVER ===============-->
					<div class="autor-cover">
						<img src="assets/img/autor-img.png" alt="img">
						<div class="autor-content">
							<div class="name">Samson Peters</div>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div>
					</div>
					<!--============= AUTOR-COVER END =============-->
					
					<div class="reviews">
					<?php
						foreach ($listreplys as $reply) {
							$reolyid = $reply['id_reply'];
							$type = -1;
							$userid = $_SESSION['id'];
							$db11 = config::getConnexion();
							// Checking user status
							$sql1 = "SELECT count(*) as cntStatus,type FROM like_unlike WHERE userid=".$userid." and replyid=".$replyid;
							$queryid1  = $db1->prepare($sql1);
							$queryid1->execute();
							$status_row1 = $queryid1->fetch();							
							$count_status1 = $status_row1['cntStatus'];
							if($count_status1 > 0){
								$type1 = $status_row1['type'];
							}

							// Count post total likes and unlikes
							$like_query1 = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and replyid=".$postid;
							$db21 = config::getConnexion();
							$query1 = $db21->prepare($like_query1);
							$query1->execute();							
							$like_row1 = $query1->fetch();
							$total_likes1 = $like_row1['cntLikes'];
		
							$unlike_query1 = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and replyid=".$postid;
							$db31 = config::getConnexion();
							$query1 = $db31->prepare($unlike_query1);
							$query1->execute();							
							$unlike_row1 = $query1->fetch();
							$total_unlikes1 = $unlike_row1['cntUnlikes'];
						?>
						
						<h2 class="title">Comments</h2>
						<ul class="reviews-list">
							<li class="item">
								<div class="review-item">
									<div class="review-avatar"><img src="assets/img/comments-photo-1.png" alt="img"></div>
									<div class="review-content">
										<h6 class="name"><?php echo $reply['username_reply'] ?></h6>
										<div class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $post['date_reply'] ?></div>
										<p class="review-comment"><?php echo $post['text_reply'] ?></p>
										<span class="post-comment"><i class="fa fa-thumbs-up" aria-hidden="true"></i><input type="button" value="Like" id="like_<?php echo $replyid; ?>" class="like" style="<?php if($type == 1){ echo "color: #f23849;"; } ?>" />&nbsp;<span id="likes_<?php echo $replyid; ?>"><?php echo $total_likes1; ?></span>&nbsp;</span>
										<a href="#" class="review-btn"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report</a>
										<a href="#" class="review-btn"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
									</div>
								</div>
								
								

								<?php
					}					
						?>



						<div class="reviews-form">
							<h2 class="title">Leave a Comment</h2>
							<form action="ajouterReply.php?postid=<?php echo $_GET['postid']?>"  method="POST" >
								<ul class="form-cover">
									<li class="inp-text">
										<label>Message * (required)</label>
										<textarea name="text" required></textarea>
									</li>
								</ul>
								<div class="btn-form-cover">
									<button type="submit" class="btn">send comment</button>
								</div>
							</form>
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
	<script>$(document).ready(function(){

// like and unlike click
$(".like, .unlike").click(function(){
	var id = this.id;   // Getting Button id
	var split_id = id.split("_");

	var text = split_id[0];
	var postid = split_id[1];  // postid

	// Finding click type
	var type = 0;
	if(text == "like"){
		type = 1;
	}else{
		type = 0;
	}

	// AJAX Request
	$.ajax({
		url: 'like_reply.php',
		type: 'reply',
		data: {replyid:replyid,type:type},
		dataType: 'json',
		success: function(data){
			var likes = data['likes'];
			var unlikes = data['unlikes'];

			$("#likes_"+replyid).text(likes);        // setting likes
			$("#unlikes_"+replyid).text(unlikes);    // setting unlikes

			if(type == 1){
				$("#like_"+replyid).css("color","#f23849");
				$("#unlike_"+replyid).css("color","#fff");
			}

			if(type == 0){
				$("#unlike_"+replyid).css("color","#f23849");
				$("#like_"+replyid).css("color","#fff");
			}

		}
	});
	

});

}); </script>
</body>

</html>
	
