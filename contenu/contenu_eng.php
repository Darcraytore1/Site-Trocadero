<?php
include("connexionBDD.php");
define("langue", "Language");

// debut_base.php

define("Titre_page", "The Trocadero Cultural Rally");
define("Accueil", "Home");
define("Rallye", "Rally");
define("Trocadero", "Trocadero");
define("Contact", "Contact");


// fin_base.php

define("Mentions_legales", "Legal Notice");
define("Statistiques", "Statistics");

// index.php
$contenu_Accueil = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Accueil'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_A = $contenu_Accueil[0]['contenu'];
define("Titre_Accueil", "Welcome");
define("Contenu_Accueil", 
	
<<<contenu_accueil
	$contenu_A
contenu_accueil

);


// Rallye.php

// Trocadero.php ??

define("Titre_Rallye", "To Visit");
define("Place_du_Trocadéro", "Trocadero Place");
define("Tour_Eiffel", "Eiffel Tower");
define("Palais_de_Chaillot", "Chaillot Palace");
define("Jardins_du_Trocadéro", "Trocadero Gardens");
define("Champ_de_Mars", "Fields of Mars");


// Contact.php
$contenu_Contact = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Contact'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_C = $contenu_Contact[0]['contenu'];
define("Contenu_Contact", 

<<<contenu_contact
	$contenu_C
contenu_contact

);

// Jardins_du_Trocadero.php
$contenu_Jardins_du_Trocadero = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Jardins_du_Trocadero'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_Jardins = $contenu_Jardins_du_Trocadero[0]['contenu'];
define("titre_jardins_trocadero", "Trocadero Gardens");
define("Contenu_Jardins_du_Trocadero", 

<<<contenu_Jardins_du_Trocadero
	$contenu_Jardins
contenu_Jardins_du_Trocadero

);

// Place_du_Trocadero.php
$contenu_Place_du_Trocadero = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Place_du_Trocadero'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_Place = $contenu_Place_du_Trocadero[0]['contenu'];
define("titre_place_trocadero", "Trocadero Place");
define("Contenu_Place_du_Trocadero", 

<<<contenu_place_du_trocadero
	$contenu_Place
contenu_place_du_trocadero

);

// Palais_de_Chaillot.php
$contenu_Palais_de_Chaillot = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Palais_de_Chaillot'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_Palais = $contenu_Palais_de_Chaillot[0]['contenu'];
define("titre_palais_chaillot", "Chaillot Palace");
define("Contenu_Palais_de_Chaillot",

<<<contenu_palais_de_chaillot
	$contenu_Palais
contenu_palais_de_chaillot

);

// Tour_Eiffel.php
$contenu_Tour_Eiffel = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Tour_Eiffel'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_Tour = $contenu_Tour_Eiffel[0]['contenu'];
define("titre_tour_eiffel", "Eiffel Tower");
define("Contenu_Tour_Eiffel", 

<<<contenu_tour_eiffel
	$contenu_Tour
contenu_tour_eiffel

);

$contenu_Champs_de_Mars = $dbh->query("SELECT `contenu` FROM `T_contenu_eng` WHERE `monument` = 'Champ_de_Mars'")->fetchAll(PDO::FETCH_ASSOC);
$contenu_Champ = $contenu_Champs_de_Mars[0]['contenu'];
define("titre_champ_de_mars", "Fields of Mars");
define("Contenu_Champs_de_Mars",

<<<contenu_Champs_de_Mars
	$contenu_Champ
contenu_Champs_de_Mars

);
?>

