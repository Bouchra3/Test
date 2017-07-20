<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>

	<!-- CDN Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">


</head>
<body>
	<!--******Partie Connexion*******-->

	<h2>Connexion</h2>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <form class="form-inline" id="formConnexion" method="POST">
	      <input type="hidden" name="id">
			  <div class="form-group">
			    <label for="emailId">Votre email</label>
			    <input type="text" class="form-control" id="emailId" placeholder="Votre login" name="login">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail2">mot de passe</label>
			    <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Votre mot de passe" name="mdp">
			  </div>
			  <button type="submit" class="btn btn-default">Connexion</button>
			</form>
	    </div>
	  </div>
	</nav>
	<!--******Inscription********-->
	<h2>Inscription</h2>
	<p>C'est gratuit(et ça le restera toujours)</p>
	<div id="test"></div>
	<form class="form-group" method="POST" id="formulaire">
		<div class="form-inline">
			<div class="form-group col-md-offset-4">
				<label class="sr-only" for="exampleInputEmail3">Prénom</label>
				<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Prénom" name="prenom">
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword3">Nom de famille</label>
				<input type="text" class="form-control" id="exampleInputPassword3" placeholder="Nom de famille" name="nom">
			</div>
		</div>
	<!-- </form>
	<form method="POST" id="formulaire"> -->
		<div class="form-group col-md-4 col-md-offset-4">
		    <label for="exampleInputEmail1"></label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Numéro mobile ou email" name="numero_email">
		</div><!-- 
		<div class="form-group col-md-4 col-md-offset-4">
		    <label for="exampleInputPassword1"></label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer numéro mobile ou email">
		</div> -->
		<div class="form-group col-md-4 col-md-offset-4">
		    <label for="exampleInputPassword1"></label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nouveau mot de passe" name="mdp">
		</div>
		
		<!--******Date de naissance*******-->

		<div class="col-md-4 col-md-offset-4">
			
				<label for="jour">jour : </label>
			
				<select id="jour" name="jour">
				
					<?php
					for($i=1; $i<32; $i++){
						if($i<10){
						echo '<option>0'.$i.'</option>';
						}	
						else{
						echo '<option>'.$i.'</option>';	
						}
					}
					?>
	
				</select>
			<label for="mois">Mois : </label>			
			<select id="mois" name="mois">
				<?php
				$mois = array(
				'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
				
					for($i=0; $i<12; $i++){
						echo '<option>';
						print_r ($mois[$i]);
						echo '</option>';						
					}
					?>
			</select>
			<label for="annee">Annee : </label>
			<select id="annee" name="annee">
				
					
						<?php
						for($i=date('Y'); $i>1900; $i--){
							echo '<option>'.$i;
							echo '</option>';	
						}
						?>
					
			</select>
		</div>
		<!--******Fin date de naissance*****-->	
		
			<div class="col-md-4 col-md-offset-4">
				
				<input type="radio" name="civilite" value="f"/>Femme
				<input type="radio" name="civilite" value="m">Homme
				
			</div>
			<div class="col-md-4 col-md-offset-4">
			<small>En cliquant sur Créer un compte, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies. Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment</small>
			</div>
			<div class="col-md-4 col-md-offset-4">
			<input type="submit" class="btn-inscription" value="Inscription">
			</div>
		
		
	</form>
	




	<!--les liens pour les scripts js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>