<?php
declare(strict_types = 1);

namespace App\Admin\Contact;

class ContactController {


    public function __construct($app, $params = [])
    {
        $this->app = $app;
    }

    public function voirListe($params = [])
    {
        $contacts = $this->app->baseDeDonnees->recupererTouteLaTable('contacts');

        require_once 'resources/vues/contact/voir-liste.view.php';
    }

    public function ajouter($params = [])
    {
        require_once 'resources/vues/contact/ajouter.view.php';
    }

    public function sauvegarder($params = [])
    {
        $prenom = $_POST['contact_prenom'];
        $nom = $_POST['contact_nom'];
        $email = $_POST['contact_email'];
        $portable = $_POST['contact_portable'];
        // $tags = $_POST['contact_tags'];

        try {
            $this->app->baseDeDonnees->insererDansTable('contacts', [
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $email,
                'portable' => $portable,
                'tags' => json_encode([])
            ]);
        }
        catch (\Exception $exception) {}
    }

}