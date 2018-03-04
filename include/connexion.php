<?php 
	$host="localhost";//Host:Serveur
	$login="root";//Nom utilisateur
	$mdp="";//Mot de passe vide pour wamp serveur 
	try{
// Connexion a la base de donnée via la methode PDO
	$connexion= new PDO("mysql:host=$host;dbname=legacy",$login,$mdp);
// Les constantes PDO pour recuperer les valeurs sous forme de tableau associatif
	$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	 
	}
	catch(PDOException $e){
	// Exception pour capturer les Erreurs
	echo 'Echec de connexion a la base'.$e->getMessage();

	}
	// Fonction pour la securisation des données entreés par les utilisateurs
	function securisation($var){

	$var=trim($var);//Supprime les espaces inutile
	$var=stripcslashes($var);//supprime les anti-slashes
	$var=strip_tags(htmlspecialchars($var));//supprime les balises html
	return $var;
	}

 ?>