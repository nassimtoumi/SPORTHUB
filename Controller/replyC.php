<?PHP
	include "../config.php";
	require_once '../Model/reply.php';

	class replyC {
		
		function ajouterReply($reply){
			$sql="INSERT INTO reply ( username_reply, text_reply, id_post ) 
			VALUES (:username_reply,:text_reply,:id_post)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'username_reply' => $reply->getUsername_reply(),
					'text_reply' => $reply->getText_reply(),
					'id_post'=>$reply->getId_post()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherReply($id_post){
			
			$sql="SELECT * FROM reply WHERE id_post=$id_post ";
			$db = config::getConnexion();
			try{
				$liste1 = $db->query($sql);
				return $liste1;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
    }

   
		

?>