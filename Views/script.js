$(document).ready(function(){

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
		url: 'likeunlike.php',
		type: 'post',
		data: {postid:postid,type:type},
		dataType: 'json',
		success: function(data){
			var likes = data['likes'];
			var unlikes = data['unlikes'];

			$("#likes_"+postid).text(likes);        // setting likes
			$("#unlikes_"+postid).text(unlikes);    // setting unlikes

			if(type == 1){
				$("#like_"+postid).css("color","#f23849");
				$("#unlike_"+postid).css("color","#fff");
			}

			if(type == 0){
				$("#unlike_"+postid).css("color","#f23849");
				$("#like_"+postid).css("color","#fff");
			}

		}
	});
	

});

}); 
var isReply = false; 
var commentID = 0;
var max = $numComments ;

$("#addComment, #addReply").on('click', function () {
	var comment;

	if (!isReply)
		comment = $("#mainComment").val();
	else
		comment = $("#replyComment").val();

	if (comment.length > 5) {
		$.ajax({
			url: 'index.php',
			method: 'POST',
			dataType: 'text',
			data: {
				addComment: 1,
				comment: comment,
				isReply: isReply,
				commentID: commentID
			}, success: function (response) {
				max++;
				$("#numComments").text(max + " Comments");

				if (!isReply) {
					$(".userComments").prepend(response);
					$("#mainComment").val("");
				} else {
					commentID = 0;
					$("#replyComment").val("");
					$(".replyRow").hide();
					$('.replyRow').parent().next().append(response);
				}
			}
		});
	} else
		alert('Please Check Your Inputs');
});
