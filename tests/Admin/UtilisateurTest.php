<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use App\Admin\Utilisateur\Utilisateur;

final class AdminUtilisateurTest extends TestCase
{
    public function testCreableAvecUtilisateurValide(): void
    {
        $this->assertInstanceOf(
            Utilisateur::class,
            new Utilisateur([
                'prenom' => 'Ulysse',
                'nom' => 'ARNAUD',
                'email' => 'a.ulysse@ecole-ipssi.net',
                'portable' => "0123456789",
                'motDePasse' => 'secret'
            ])
        );
    }

    public function testPasCreableAvecUtilisateurInvalide(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Utilisateur([
            'prenom' => 'Ulysse',
            'nom' => 'ARNAUD',
            'email' => 'a.ulysse_at_ecole-ipssi_dot_net',
            'portable' => "0123456789",
            'motDePasse' => 'secret'
        ]);
    }
}
