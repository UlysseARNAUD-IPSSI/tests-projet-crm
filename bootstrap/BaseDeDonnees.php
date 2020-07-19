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
        } catch( \PDOException $PDOException ) {
            // echo "Connection failed: " . $PDOException->getMessage();
            $this->pdo = null;
        }
    }

}