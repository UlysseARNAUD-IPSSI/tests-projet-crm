<?php
declare(strict_types = 1);

namespace App\Admin\Contact;

class ContactController {


    public function __construct($params = [])
    {
    }

    public function voirListe($params = [])
    {
        require_once 'resources/vues/contact/voir-liste.view.php';
    }

}