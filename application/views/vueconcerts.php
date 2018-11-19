<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
    <?php $this->load->view('header.php')?>
	<?php foreach ($concerts as $concert): ?>
		<p>Date concert : <?=$concert->date_concert?></p>

		<p>Horaires :</p>
		<ul>
			<li>Ouverture : <?=$concert->heure_ouverture?></li>
			<li>Début : <?=$concert->heure_debut?></li>
			<li>Fin : <?=$concert->heure_fin?></li>
		</ul>

		<p>Tarifs : </p>
		<ul>
			<li>Plein : <?=$concert->tarif_plein?></li>
			<li>Reduit : <?=$concert->tarif_reduit?></li>
		</ul>

		<p>Lien réservation : <?=$concert->lien_resa?></p>
		<p>Illustration : <?=$concert->illustration?></p>

		<p>Première partie :</p>
		<ul>
			<li>Nom : <?=$concert->p1_nom?></li>
			<li>Site web : <?=$concert->p1_siteweb?></li>
		</ul>
		<p>Seconde partie :</p>
		<ul>
			<li>Nom : <?=$concert->p2_nom?></li>
			<li>Site web : <?=$concert->p2_siteweb?></li>
		</ul>

		<p>Lieu :</p>


		<ul>
			<li>Nom : <?=$concert->nom?></li>
			<li>Adresse : <?=$concert->adresse?></li>
			<li>code_postal : <?=$concert->code_postal?></li>
			<li>ville : <?=$concert->ville?></li>
			<li>latitude : <?=$concert->latitude?></li>
			<li>longitude : <?=$concert->longitude?></li>
			<li>tel : <?=$concert->tel?></li>
			<li>siteweb : <?=$concert->siteweb?></li>
		</ul>
		<hr>
	<?php endforeach?>
</body>
</html>