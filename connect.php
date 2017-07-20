<?php

class Connect {

	public $connt; // Variable de connection

        function __construct(){ // Constructeur
            $this->connt = new PDO ("mysql:host=localhost;dbname=facebook", "root", ""); // Instance PDO -> Connection bdd
            $this->connt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des error
            return $this->connt; // return var
        }


            /*
            *   Fonction d'insertion des données dans la table inscription
            *   return l'id de l'utilisateur => int
            */
     	function insert($prenom, $nom, $numero_email, $mdp, $date, $civilite){
            $this->connt->query(
                "INSERT INTO `inscription`(`prenom`, `nom`, `numero_ou_email`, `mot_de_passe`, `date_de_naissance`, `civilite`) VALUES ('$prenom','$nom','$numero_email','$mdp','$date','$civilite')"
                );
            return $this->connt->lastInsertId();
        }

        function read($numero_email, $mdp){
            $data = $this->connt->query("SELECT * FROM inscription WHERE numero_ou_email = '$numero_email' AND mot_de_passe = '$mdp'");
            $result = $data->fetch(PDO::FETCH_ASSOC);
            
            return $result;
        }




}