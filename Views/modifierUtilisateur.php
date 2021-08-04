<?php
require '../Model/Utilisateur.php';
require '../Controller/UtilisateurC.php';
//require '../config.php';
session_start();

$email = $_POST['Email'];
$password = $_POST['password'];
$user = new Utilisateur($username,$email,$password);
$Utilisateur = new UtilisateurC();
$Utilisateur->modifierUtilisateur($user);
if(isset($_POST['username'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
header('Location: Edit.php');
?>