# Module Test : Projet CRM

Création d'un répertoire de contact et de sa gestion (CRUD) afin de créer des tests unitaires (voire des tests d'intégration).

## Installation

### Prérequis
- PHP 7.3+ (Testé avec PHP 7.3 sous Docker et PHP 7.4 sous CLI)
- MySQL 5.7+ (Testé avec la version 8)

### Via Docker

```bash
docker-compose up
```

### Via CLI

```bash
sh start.sh
php -S localhost:8001 server.php
```

## Utilisation

### Lancer le site

```
http://localhost:8001
```

### Lancer les tests

#### Via Docker

```bash
docker exec tests-projet-crm-backoffice vendor/bin/phpunit tests
```

### Via CLI

```bash
./vendor/bin/phpunit tests
```

## Contribution

Le répertoire peut être cloné, forké, téléchargé sans autorisation au préalable. Néanmois, des pulls request peuvent être créés afin d'améliorer le code source.