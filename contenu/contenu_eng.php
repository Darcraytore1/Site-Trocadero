<?php

// debut_base.php

define("Titre_page", "Cultural Rally of the Trocadero");
define("Accueil", "Home");
define("Rallye", "Rally");
define("Trocadero", "Trocadero");
define("Contact", "Contact");


// fin_base.php

define("Mentions_legales", "Legal Notice");
define("Statistiques", "Statistics");

// index.php

define("Titre_Accueil", "Welcome");
define("Contenu_Accueil", <<<contenu_accueil
	This website's goal is to create a cultural rally, around the Trocadero area (Paris)
	<br/>
	You will find 3 differents routes under the 'rally' page.
	<br/>
	Depending on the time you planned to play, you will chose one (or multiple) of the following routes...
	<br/>
	Easy route, you will need about 1 houres, Medium route, about 3 houres and Long route, about 5 houres.
	<br/>
	Under the 'Trocadero' tab, you will find additional informations about specific monuments previously seen in game.
	<br/>
	This website has been made by a group of Marne La Vallée's IUT students.
	<br/>
contenu_accueil
);


// Rallye.php

define("Titre_Rallye", "To Visit");
define("Place_du_Trocadéro", "Trocadero Place");
define("Tour_Eiffel", "Eiffel Tower");
define("Palais_de_Chaillot", "Chaillot Palace");
define("Jardins_du_Trocadéro", "Trocadero Gardens");
define("Champ_de_Mars", "Fields of Mars");


// Contact.php

define("Contenu_Contact", <<<contenu_contact
	HOUCCINE Thomas : Director
<br/>
	DELPORTE Logan : Designer
<br/>
	DOS SANTOS Sebastien : Developer
<br/>
	DELMAS Jean : Communication
<br/>
	ALBISSON Damien : Developer
<br/>
	Email Address: damienalbisson@gmail.com
<br/>
	Phone Number : +33 6 12345678
contenu_contact
);
?>

