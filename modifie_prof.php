<?php 
$nom=filter_input(INPUT_POST,'nom');
if (isset($nom)) {
	include'include/connexion.php';
	 $id= $_GET['id'];
	$style="";
	$titremsg="";
	$message='';

	$nom= securisation($_POST['nom']);
	$email= securisation($_POST['email']);
    $date= securisation($_POST['datnaiss']);
    $phone= securisation($_POST['telephone']);
    $sexe= securisation($_POST['sexe']);
    $photo=$_FILES['photo']['name'];
    $chemin=$_FILES['photo']['tmp_name'];
    move_uploaded_file($chemin, "Image/photo/$photo");
	    if(!empty($nom) && !empty($email) && !empty($date) && !empty($phone) && !empty($sexe) && !empty($photo))
	    {
                                        /*  incscription de l'utilisateur  */  
                                $q= $connexion->prepare("UPDATE prof SET nom=?,email=?,daten=?,telephone=?,sexe=?,photo=? WHERE id=$id");
                                $q->execute([$nom,$email,$date, $phone, $sexe,$photo]); 
                                	$style="success";
									$titremsg="Bravo!";
									$message="Les données ont été modifié avec succès";
								header("location:liste_prof.php");
       	
                  
                            /*erreur champ vide*/
        }else{
             $erreur="Veuillez renseigner tous les champs s'il vous plait!";
        }



	$title="Legacy -Inscription";
	$details="Inscription d'un Professeur";
	$contenu="contenu/modifier_etudiant.php";
	include 'template.php';

}else{

	$style="";
	$titremsg="";
	$message='';

	$title="Legacy -Inscription";
	$details="Inscription d'un Professeur";
	$contenu="contenu/modifier_prof.php";
	include 'template.php';

}
 ?>
