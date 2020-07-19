<?php
declare(strict_types=1);

require_once __DIR__ . '/../layouts/header.view.php';

echo '<h1>Ajouter un contact</h1>';

echo '<a href="/contact">Voir la liste de contact</a>';

echo implode('', [
   '<form method="post" action="/contact/sauvegarder" style="display: flex;flex-direction: column">',
   '<label>',
    '<span>Prénom</span>',
    '<input type="text" name="contact_prenom" placeholder="Jean">',
    '</label>',

   '<label>',
    '<span>Nom</span>',
    '<input type="text" name="contact_nom" placeholder="DUPONT">',
    '</label>',

   '<label>',
    '<span>Email</span>',
    '<input type="email" name="contact_email" placeholder="j.dupont@ecole-ipssi.net">',
    '</label>',

   '<label>',
    '<span>Portable</span>',
    '<input type="text" name="contact_portable" placeholder="0123456789">',
    '</label>',

   '<input type="submit" name="submit" value="Valider">',
   '</form>'
]);

require_once __DIR__ . '/../layouts/footer.view.php';
