<?PHP
	include "../config.php";
	require_once '../Model/Post.php';

	class PostC {
		
		function ajouterPost($Post){
			$sql="INSERT INTO post (category_post, username_post, text_post , sujet_post) 
			VALUES (:category_post ,:username_post,:text_post ,:sujet_post)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'category_post' => $Post->getCategory_post(),
					'username_post' => $Post->getUsername_post(),
					'text_post' => $Post->getText_post(),
					'sujet_post' => $Post->getSujet_post()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherPosts(){
			
			$sql="SELECT * FROM post ORDER BY id_post DESC LIMIT 5 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherPosts1(){
			
			$sql="SELECT * FROM post WHERE category_post='fitness' ORDER BY id_post DESC LIMIT 5";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherPosts2(){
			
			$sql="SELECT * FROM post WHERE category_post='yoga' ORDER BY id_post DESC LIMIT 5 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
	
		function afficherPosts3(){
			
			$sql="SELECT * FROM post WHERE category_post='meditation' ORDER BY id_post DESC LIMIT 5 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	}

   
		

?>