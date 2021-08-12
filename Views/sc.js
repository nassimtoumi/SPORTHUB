$(document).ready(function(){

    // bookmark and unbookmark click
    $(".bookmark, .bookmarked").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");
    
        var text = split_id[0];
        var postid = split_id[1];  // postid
        var userid = split_id[2];
    
        // Finding click type
        var type = 0;
        if(text == "bookmark"){
            type = 1;
        }else{
            type = 0;
            text="Bookmarked";
        }
    
        // AJAX Request
        $.ajax({
            url: 'bookmark.php',
            type: 'post',
            data: {postid:postid,type:type,userid:userid},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                var unlikes = data['unlikes'];
    
                $("#bookmark_"+postid).text(likes);        // setting likes
                $("#bookmarked_"+postid).text(unlikes);    // setting unlikes
    
                if(type == 1){
                    $("#bookmark_"+postid+"_"+userid).text("bookmarked");
                    $("#bookmark_"+postid+"_"+userid).css("color","#f23849");
                    //$("#unlike_"+postid).css("color","#fff");
                }
    
                if(type == 0){
                    $("#bookmarked_"+postid+"_"+userid).text("bookmark");
                    $("#bookmarked_"+postid+"_"+userid).css("color","#fff");
                }
    
            }
        });
        
    
    });
    
    }); 