<?php
declare(strict_types = 1);

namespace App\Admin\Utilisateur;

use InvalidArgumentException;

class Utilisateur {

    private $nom;
    private $prenom;
    private $email;
    private $portable;
    private $motDePasse;

    public function __construct($params)
    {

        $nom = $params['nom'];
        $prenom = $params['prenom'];
        $email = $params['email'];
        $portable = $params['portable'];
        $motDePasse = $params['motDePasse'];


        $this->assurerNomValide($nom);
        $this->assurerPrenomValide($prenom);
        $this->assurerEmailValide($email);
        $this->assurerPortableValide($portable);
        $this->assurerMotDePasseValide($motDePasse);


        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->portable = $portable;
        $this->motDePasse = $motDePasse;

    }

    private function assurerNomValide ($nom) {
        if (!is_string($nom)) {
            throw new InvalidArgumentException('Nom invalide : chaîne de caractères attendue');
        }

        $taille = strlen($nom);
        if ($taille < 1 || $taille > 64 ) {
            throw new InvalidArgumentException('Nom invalide : nom entre 3 et 64 caractères (inclus) attendue');
        }
    }

    private function assurerPrenomValide ($prenom) {
        if (!is_string($prenom)) {
            throw new InvalidArgumentException('Prénom invalide : chaîne de caractères attendue');
        }

        $taille = strlen($prenom);
        if ($taille < 1 || $taille > 64 ) {
            throw new InvalidArgumentException('Prénom invalide : prénom entre 3 et 64 caractères (inclus) attendue');
        }
    }

    private function assurerEmailValide ($email) {
        if (!is_string($email)) {
            throw new InvalidArgumentException('Email invalide : chaîne de caractères attendue');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Email invalide : format incorrect');
        }
    }

    private function assurerPortableValide ($portable) {
        if (!is_string($portable)) {
            throw new InvalidArgumentException('Portable invalide : chaîne de caractères attendue');
        }

        // TODO : En fonction de son format (expression reguliere peut être attendue)
    }

    private function assurerMotDePasseValide ($motDePasse) {
        if (!is_string($motDePasse)) {
            throw new InvalidArgumentException('Mot de passe invalide : chaîne de caractères attendue');
        }
    }

}