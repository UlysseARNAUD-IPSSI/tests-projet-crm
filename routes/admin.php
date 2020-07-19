<?php
declare( strict_types=1 );

use Bootstrap\Routeur\Route;
use App\Admin\Utilisateur\UtilisateurController;
use App\Admin\Contact\ContactController;

$app->routeur->ajouterRoute( Route::get(
    '/', function() {
    require_once 'resources/vues/home.view.php';
} ) );

$app->routeur->ajouterRoute( Route::get(
    '/contact', function() {
    (new ContactController)->voirListe();
} ) );