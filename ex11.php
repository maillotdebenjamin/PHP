#!/usr/bin/php
<?php
    class Personne
    {
        // Attributs
        public $nom;
        public $prenom;
        public $dateDeNaissance;
        public $taille;
        public $sexe;
        // Constantes
        const NOMBRE_DE_BRAS = 2;
        const NOMBRE_DE_JAMBES = 2;
        const NOMBRE_DE_YEUX = 2;
        const NOMBRE_DE_PIEDS = 2;
        const NOMBRE_DE_MAINS = 2;
        // Méthodes
        public function __construct() {
            echo "pass\n";
        }
        public function boire() {
        echo "La personne boit\n";
        }
        public function manger() {
        echo "La personne mange\n";
        }
    }

    //premiere facon de faire
    $personne1 = new Personne();
    // Définition des attributs de la personne 1
    $personne1->nom = 'Hamon';
    $personne1->prenom = 'Hugo';
    $personne1->dateDeNaissance = '02-07-1987';
    $personne1->taille = '180';
    $personne1->sexe = 'M';
    echo "NOM = $personne1->nom\n";
    echo "Chaque personne a ", Personne::NOMBRE_DE_YEUX ," yeux.\n";
    $personne1->manger();

    //deuxieme facon de faire
    $personne2 = new Personne();

?>