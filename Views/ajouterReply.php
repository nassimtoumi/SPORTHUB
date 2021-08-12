<?php
require '../Model/reply.php'; 
require '../Controller/replyC.php';
session_start();
if (isset($_POST['text'])) {
    # code...
    $username_reply=$_SESSION['name'];
    $text_reply=$_POST['text'];
    $id_post = $_GET['postid'];
    $reply = new reply($username_reply,$text_reply ,$id_post );
    $replyC = new replyC();
    $replyC->ajouterReply($reply);
 //  echo 'ok';
     header("Location: Answers.php?postid=$id_post");
}else {
    echo 'chyy';
}