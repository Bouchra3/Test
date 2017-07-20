$(function() {

	//affichage 
	$("#formConnexion").on("click",function(event){
		event.preventDefault();//Annule l'evenement par defaut
		$.ajax({
            url: "connexion.php",
            type: "POST",
            dataType: "JSON",
            success: function (reponse){
                
           

                reponse = JSON.parse(reponse);
                console.log(reponse[elem].id_inscription+reponse[elem].prenom+reponse[elem].nom);

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