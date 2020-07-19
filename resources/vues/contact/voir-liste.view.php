<?php
declare(strict_types=1);

require_once __DIR__ . '/../layouts/header.view.php';

echo '<h1>Votre liste de contact</h1>';

echo '<a href="/contact/ajouter">Ajouter un contact</a>';

echo '<div class="liste-contact">';
foreach ($contacts as $contact) {
    echo '<div class="entree-contact">';
    echo $contact->prenom . " " . $contact->nom;
    echo '</div>';
}
echo '</div>';

require_once __DIR__ . '/../layouts/footer.view.php';
