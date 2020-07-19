<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use App\Admin\Contact\Contact;

final class AdminContactTest extends TestCase
{
    public function testCreableAvecContactValide(): void
    {
        $this->assertInstanceOf(
            Contact::class,
            new Contact([
                'prenom' => 'Jean',
                'nom' => 'DUPONT',
                'email' => 'j.dupont@ecole-ipssi.net',
                'portable' => "0123456789",
                'tags' => []
            ])
        );
    }

    public function testPasCreableAvecUtilisateurInvalide(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Contact([
            'prenom' => 'Jean',
            'nom' => 'DUPONT',
            'email' => 'j.dupont_at_ecole-ipssi_dot_net',
            'portable' => "0123456789",
            'tags' => []
        ]);
    }

    public function testPossibleAvecAjoutDeTags(): void
    {
        $contact = new Contact([
            'prenom' => 'Jean',
            'nom' => 'DUPONT',
            'email' => 'j.dupont@ecole-ipssi.net',
            'portable' => "0123456789",
            'tags' => []
        ]);

        $contact->ajouterTag('Professionnel');

        $this->assertTrue($contact->contientTag('Professionnel'));
    }

    public function testPossibleAvecSuppressionDeTags(): void
    {
        $contact = new Contact([
            'prenom' => 'Jean',
            'nom' => 'DUPONT',
            'email' => 'j.dupont@ecole-ipssi.net',
            'portable' => "0123456789",
            'tags' => ['Professionnel']
        ]);

        $contact->supprimerTag('Professionnel');

        $this->assertFalse($contact->contientTag('Professionnel'));
    }
}
