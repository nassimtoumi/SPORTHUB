<?php
require '../Controller/PostC.php';
//require_once '../config.php';
$postC = new PostC();
$listPosts=$postC->afficherPosts();


?>

<script>
	function hideshow($id_post) {
  var x = document.getElementById($id_post);
  if (x.style.display === "none") {
    x.style.display = "block";
	
  } else {
    x.style.display = "none";
  }
}
</script>

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
	<link href="style.css" type="text/css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<script src="script.js" type="text/javascript"></script>
		<script src="sc.js" type="text/javascript"></script>
<?php include 'includes/header.php'?>
	<!-- =============== HEADER END =============== -->

	<!-- =============== HEADER-TITLE =============== -->
	
	<section class="s-header-title" style="background-image: url(assets/img/bg-1-min.png);">
		<div class="container">
			<h1 class="title">Forum</h1>
			<ul class="breadcrambs">
				<li><a href="index.php">Home</a></li>
				<li>Forum</li>
			</ul>
		</div>
	</section>
	<!-- ============= HEADER-TITLE END ============= -->

	<!--===================== S-NEWS =====================-->
	
	
		<div class="container">
			
			<div class="row">
				<div class="col-12 col-lg-9 blog-cover">
					<div class="post-item-cover">
						<div class="post-header">
							
						</div>
						<h2 class="title">Add Post </h2>
						<form action="ajouterPost.php"  method="POST">
							<ul class="form-cover">
								<li class="inp-name">
									<label>??? Category</label>
												<select  name="category" id="pet-select">
													<option value="fitness">Fitness</option>
													<option value="yoga">Yoga</option>
													<option value="meditation">M??ditation</option>
												</select>
								</li>
								<li class="inp-name">
									<label>Sujet Post (required)</label>
									<input type="text" name="sujet" required >
								</li>
								<li class="inp-text">
									<label>??? Your Post (required)</label>
												
								<!------------>
								<textarea placeholder="Write a Post !" name="text" required ></textarea>
								</li>
							</ul>
							<div class="btn-form-cover">
								<button type="submit" class="btn">Ask question</button>
							</div>
						</form>
						<!----------------------------------begin posts---------------------->




						<section class="s-news">
						<?php
						foreach ($listPosts as $post) {
							$postid = $post['id_post'];
							$namepost =$post['username_post'];
							$type = -1;
							$userid = $_SESSION['id'];
							$db1 = config::getConnexion();
							// Checking user status
							$sql = "SELECT count(*) as cntStatus,type FROM like_unlike WHERE userid=".$userid." and postid=".$postid;
							$queryid  = $db1->prepare($sql);
							$queryid->execute();
							$status_row = $queryid->fetch();							
							$count_status = $status_row['cntStatus'];
							if($count_status > 0){
								$type = $status_row['type'];
							}

							// Count post total likes and unlikes
							$like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$postid;
							$db2 = config::getConnexion();
							$query = $db2->prepare($like_query);
							$query->execute();							
							$like_row = $query->fetch();
							$total_likes = $like_row['cntLikes'];
		
							$unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$postid;
							$db3 = config::getConnexion();
							$query = $db3->prepare($unlike_query);
							$query->execute();							
							$unlike_row = $query->fetch();
							$total_unlikes = $unlike_row['cntUnlikes'];

							//get bookmarks
							$sql="SELECT * FROM bookmark WHERE id_post=$postid AND id_username=$userid ";
							$db= config::getConnexion();
							$query= $db->prepare($sql);
							$query->execute();
							$bookmark = $query->fetchAll(PDO::FETCH_ASSOC);
						?>
						
						<div class="post-content">
							<br/>
							<hr> 
							<br/>
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By <?php echo $post['username_post'] ?></a></span>
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $post['date_post'] ?></span>
								<span class="post-category"><i class="fa fa-tag" aria-hidden="true"></i><a href="#"><?php echo $post['category_post'] ?></a></span>
								<?php
						if ($_SESSION['name']==$post['username_post']) {
						?>
								<span class="post-category"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="modifierPost.php">Edit</a></span>
								<span class="post-category"><i class="fa fa-trash" aria-hidden="true"></i><a href="supprimerPost.php?id=<?php echo $postid ?>">Delete</a></span> 
								<?php
						}
						?>
							</div>
							<h2 class="title"><a href="Answers.php"><?php echo $postid ?></a></h2>
							<div class="text">
								<p><?php echo $post['text_post'] ?></p>
							</div>
						</div>
						<div class="post-footer">
							<div class="meta">
								<span class="post-comment"><i class="fa fa-thumbs-up" aria-hidden="true"></i><input type="button" value="Like" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #f23849;"; } ?>" />&nbsp;<span id="likes_<?php echo $postid;?>"><?php echo $total_likes; ?></span>&nbsp;</span>
								<span class="post-comment"><i class="fa fa-thumbs-down" aria-hidden="true"></i><input type="button" value="Unlike" id="unlike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #f23849; "; } ?>" />&nbsp;<span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span></span>
								<span class="post-comment"><i class="fa fa-reply" aria-hidden="true"></i><input type="button" onclick="hideshow(<?php echo $postid ?>)" value="Reply" id="reply<?php echo $postid; ?>" class="bookmark" />&nbsp;</span>
								<span class="post-comment"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><a href="#">Report  <?php echo $post['nb_reported'] ?> </a></span>
								
								<?php
								if (count($bookmark)==0) { ?>
									<span class="post-comment"><i class="fa fa-bookmark-o" aria-hidden="true"></i><input type="button" value="Bookmark" id="bookmark_<?php echo $postid; ?>_<?php echo $userid;?>" class="bookmark" style="<?php if($type == 1){ echo "color: #fff;"; } ?>" />&nbsp;</span>
									
									<?php
								}else {
									?>
								<span class="post-comment"><i class="fa fa-bookmark" aria-hidden="true"></i><input type="button" value="Bookmarked" id="bookmarked_<?php echo $postid; ?>_<?php echo $userid;?>" class="bookmark" style="<?php if($type == 1){ echo "color: #f23849;"; } ?>" />&nbsp;</span>
								<?php
								}
								?>
								
							</div>
							<form action="ajouterReply.php"  method="POST" >
							<div id="<?php echo $postid ?>" style="display: none;" >
							
        <textarea class="form-control" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
        <button style="float:right" class="btn-primary btn" type="submit" id="addReply">Add Reply</button>
        <button style="float:right; margin-right: 20px;"  class="btn-default btn" onclick="$('.replyRow').hide();">Close</button>
							</form>
						</div>
							<a href="Answers.php?postid=<?php  ?>" class="btn"><span>read more</span></a>
						</div>
								<?php
					}					
						?>
						<div class="row replyRow" style="display:none">
    <div class="col-md-12">
        <textarea class="form-control" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
        <button style="float:right" class="btn-primary btn" onclick="isReply = true;" id="addReply">Add Reply</button>
        <button style="float:right" class="btn-default btn" onclick="$('.replyRow').hide();">Close</button>
    </div>
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
				
				<!-----endd posts----->
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