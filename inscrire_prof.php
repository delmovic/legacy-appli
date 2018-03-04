<?php 
$nom=filter_input(INPUT_POST,'nom');
if (isset($nom)) {
	include'include/connexion.php';
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
                     if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {

                    $req= $connexion->prepare('SELECT id from etudiant where email=?');
                    $req->execute([$email]);
                    $user=$req->fetch();
                    if($user){
                    $erreur='Cet email est deja utilisé dans un autre professeur';

                            }else{
                                        /*  incscription de l'utilisateur  */  
                                $q= $connexion->prepare("INSERT INTO prof SET nom=?,email=?,daten=?,telephone=?,sexe=?,photo=?,datime=now()");
                                $q->execute([$nom,$email,$date, $phone, $sexe,$photo]); 
                                	$style="success";
									$titremsg="Bravo!";
									$message="votre inscription c'est effectué avec succès";
                               } 

                }
                    else{
                         $erreur="Veuillez renseigner un email valide s'il vous plait!";
                        }
       
                            /*erreur champ vide*/
        }else{
             $erreur="Veuillez renseigner tous les champs s'il vous plait!";
        }


$title="Legacy -Inscription";
$details="Inscription d'un professeur";
$contenu="contenu/prof.php";
include 'template.php';

}else{

	$style="";
	$titremsg="";
	$message='';

	$title="Legacy -Inscription";
	$details="Inscription d'un professeur";
	$contenu="contenu/prof.php";
	include 'template.php';
}
 ?>
