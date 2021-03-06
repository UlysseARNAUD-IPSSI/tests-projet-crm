
CREATE TABLE IF NOT EXISTS utilisateurs
(
    id         INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    nom        VARCHAR(191)     NOT NULL,
    prenom     VARCHAR(191)     NOT NULL,
    email      VARCHAR(255)     NOT NULL,
    password   VARCHAR(255)     NOT NULL,
    created_at TIMESTAMP        NOT NULL DEFAULT NOW(),
    updated_at TIMESTAMP        NOT NULL DEFAULT NOW() ON UPDATE NOW(),
    PRIMARY KEY (id),
    UNIQUE KEY users_email_unique (email)
);

CREATE TABLE IF NOT EXISTS contacts
(
    id         INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    nom        VARCHAR(191)     NOT NULL,
    prenom     VARCHAR(191)     NOT NULL,
    email      VARCHAR(255)     NOT NULL,
    tags       TEXT             NOT NULL,
    created_at TIMESTAMP        NOT NULL DEFAULT NOW(),
    updated_at TIMESTAMP        NOT NULL DEFAULT NOW() ON UPDATE NOW(),
    PRIMARY KEY (id),
    UNIQUE KEY users_email_unique (email)
);