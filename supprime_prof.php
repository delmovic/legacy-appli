
<?php
	include_once("include/connexion.php");
	
	$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT) ;
	
	$typemsg="";
	$titremsg="";
	$message=""; 
	
	$resquete = "DELETE FROM  prof WHERE id = $id " ;
			if($connexion->exec($resquete)){
					$message="Les donnees ont ete bien supprimees";
					$style="success";
					$titremsg="Bravo!";
					
				}else{
					$message="Les donnees ont déja été supprimées";
					$style="warning";
					$titremsg="Erreur!";
			}
	
	
	
	
	$title="Maboossole-ListeProfs"; 
	$contenu="contenu/list_prof.php";
	$details="Liste des Professeurs";
	include("template.php");
?>