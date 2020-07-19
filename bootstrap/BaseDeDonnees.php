<?php
declare( strict_types=1 );

namespace Bootstrap;

use PDO;

class BaseDeDonnees
{

    private $dataSourceName;
    private $pdo;

    static function singleton()
    {
        return new self( $_ENV['DATABASE_SOURCE'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD'] );
    }

    public function __construct( $dataSourceName, $user, $password )
    {
        $this->dataSourceName = $dataSourceName;

        try {
            $this->pdo = new PDO( $dataSourceName, $user, $password );

            $initScript = file_get_contents(__DIR__ . '/../database/init.sql');
            $this->pdo->exec($initScript);
        } catch( \PDOException $PDOException ) {
            // echo "Connection failed: " . $PDOException->getMessage();
            $this->pdo = null;
        }
    }

    public function recupererTouteLaTable ($table) {
        $query = $this->pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insererDansTable($table, $entree) {

        $this->pdo->beginTransaction();

        $valeurs = array_keys($entree);
        foreach ($valeurs as $curseur => $valeur) {
            $valeurs[$curseur] = "'" . $valeur . "'";
        }
        $valeurs = implode(',', $valeurs);

        $attributs = array_values($entree);
        foreach ($attributs as $curseur => $attribut) {
            $attributs[$curseur] = "'" . $attribut . "'";
        }
        $attributs = implode(',', $attributs);

        $queryString = "INSERT INTO $table ($attributs) VALUES ($valeurs)";

        $this->pdo->exec($queryString);

        header('Location:/contact');
    }

}