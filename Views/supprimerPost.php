<?php
include "../controller/PostC.php";
$PostC = new PostC();
session_start();
if (isset($_GET['id'])) {
        $PostC->supprimerPost($_GET['id']);
        header('Location:forum.php');

}else {
    header('Location:forum.php');
}

