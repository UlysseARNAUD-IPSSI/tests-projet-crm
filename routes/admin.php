<?php
declare( strict_types=1 );

use Bootstrap\Routeur\Route;
use App\Admin\Utilisateur\UtilisateurController;
use App\Admin\Contact\ContactController;

$app->routeur->ajouterRoute( Route::get( '/', function() use ($app) {
    require_once 'resources/vues/home.view.php';
} ) );

$app->routeur->ajouterRoute( Route::get(
    '/contact', function() use ($app) {
    ( new ContactController($app) )->voirListe();
} ) );

$app->routeur->ajouterRoute( Route::get(
    '/contact/ajouter', function() use ($app) {
    ( new ContactController($app) )->ajouter();
} ) );

$app->routeur->ajouterRoute( Route::get(
    '/contact/sauvegarder', function() use ($app) {
    ( new ContactController($app) )->sauvegarder();
} ) );