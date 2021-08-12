<?php
	include "../controller/postC.php";
	include_once '../Model/post.php';
    session_start();
if ( isset($_POST['text'])) {
        $post = new post($_GET['username_post'],$_GET['category_post'],$_GET['sujet_post'],$_GET['text_post']) ;
        $postC = new postC();
        $postC->modifierPost($id_post,$text_post);
        
        $_SESSION['email']=$_POST['email'];
        header('Location: Edit.php?erreur=0');
    
}else {
    header('Location: Edit.php');}
    ?>