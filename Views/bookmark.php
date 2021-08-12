<?php
include "../config.php";
use function PHPSTORM_META\type;

if (isset($_POST['postid'])) {
    $type = $_POST['type'];
    $postid = $_POST['postid'];
    $userid = $_POST['userid'];
    $con1 = config::getConnexion();
    if ($type == 1) {
        $sql = "INSERT INTO bookmark(id_post,id_username) values(".$postid.",".$userid.")";
        $con1->exec($sql);
    }else {
        $sql = "DELETE FROM bookmark WHERE id_post=$postid AND id_username=$userid";
        $con1->exec($sql);
    }
    $return_arr1 = "ok";
    echo json_encode($return_arr1);

}else {
    header('Location:Forum.php');
}
