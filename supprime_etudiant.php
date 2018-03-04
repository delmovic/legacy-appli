
<?php
	include_once("include/connexion.php");
	
	$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT) ;
	
	$typemsg="";
	$message=""; 
	
	$resquet = "DELETE FROM  etudiant WHERE id = $id " ;
			if($connexion->exec($resquet)){
					$message="Les donnees ont ete bien supprimees";
					$style="success";
					$titremsg="Bravo!";
					
				}else{
					$message="Les donnees ont pas déja été supprimees
					<br>";
					$style="warning";
					$titremsg="Erreur!";
			}
	
	
	
	
	$title="Maboossole-ListeEtudiands"; 
	$contenu="contenu/list_etudiant.php";
	$details="Liste des Etudiants";
	include("template.php");
?>