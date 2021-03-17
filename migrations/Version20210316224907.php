<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210316224907 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX UNIQ_8D93D64950EAE44');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, id_utilisateur FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_utilisateur VARCHAR(180) NOT NULL, roles CLOB  NULL --(DC2Type:json)
        , password VARCHAR(255)  NULL)');
        $this->addSql('INSERT INTO user (id, id_utilisateur) SELECT id, id_utilisateur FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64950EAE44 ON user (id_utilisateur)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(32) NOT NULL COLLATE BINARY, mdp VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('DROP INDEX UNIQ_8D93D64950EAE44');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, id_utilisateur, password FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, mdp VARCHAR(255) NOT NULL COLLATE BINARY, id_utilisateur VARCHAR(255) NOT NULL COLLATE BINARY, type VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO user (id, id_utilisateur, mdp) SELECT id, id_utilisateur, password FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64950EAE44 ON user (id_utilisateur)');
    }
}
