<?PHP
	include "../config.php";
	require_once '../Model/reply.php';

	class replyC {
		
		function ajouterReply($reply){
			$sql="INSERT INTO reply ( username_reply, text_reply ) 
			VALUES (:username_reply,:text_reply)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'username_reply' => $reply->getUsername_reply(),
					'text_reply' => $reply->getText_reply(),
					

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherReply(){
			
			$sql="SELECT * FROM reply ORDER BY id_reply DESC LIMIT 3 ";
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