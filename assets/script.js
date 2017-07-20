$(function() {

	//affichage 
	$("#formConnexion").on("submit",function(event){
		event.preventDefault();//Annule l'evenement par defaut
		$.ajax({
            url: "connexion.php",
            type: "POST",
			dataType: "JSON",
			data: $("#formConnexion").serialize(),
            success: function (reponse){
                console.log(reponse.nom + " " + reponse.prenom);
            }
        });
	});


	// Ajout d'un utilisateur
	$("#formulaire").on("submit",function(event){
		event.preventDefault();//Annule l'evenement par defaut

		$.ajax({

			url: "inscription.php",
			type: "POST",
			data: $("#formulaire").serialize(),

			 success: function (reponse){

				$("#test").text("Bravo vous êtes devenu membre");
				// console.log(reponse);


		}

	});

});

})