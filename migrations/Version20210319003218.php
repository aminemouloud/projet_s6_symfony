<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319003218 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_717E22E31D1C63B3');
        $this->addSql('DROP INDEX UNIQ_717E22E3A86D7B25');
        $this->addSql('CREATE TEMPORARY TABLE __temp__etudiant AS SELECT id, num_etudiant, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email, utilisateur FROM etudiant');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('CREATE TABLE etudiant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_etudiant VARCHAR(255) DEFAULT NULL COLLATE BINARY, nom VARCHAR(255) DEFAULT NULL COLLATE BINARY, prenom VARCHAR(255) DEFAULT NULL COLLATE BINARY, dnn DATE DEFAULT NULL, rse BOOLEAN DEFAULT NULL, redoublant BOOLEAN DEFAULT NULL, tiers_temps BOOLEAN DEFAULT NULL, ajac BOOLEAN DEFAULT NULL, semestre_obtenu VARCHAR(255) DEFAULT NULL COLLATE BINARY, adresse VARCHAR(255) DEFAULT NULL COLLATE BINARY, email VARCHAR(255) DEFAULT NULL COLLATE BINARY, utilisateur VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO etudiant (id, num_etudiant, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email, utilisateur) SELECT id, num_etudiant, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email, utilisateur FROM __temp__etudiant');
        $this->addSql('DROP TABLE __temp__etudiant');
        $this->addSql('DROP INDEX UNIQ_99B1DEE3CFB1B6A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, nom_parcours, semestre FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_parcours VARCHAR(255) DEFAULT NULL COLLATE BINARY, semestre VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO parcours (id, nom_parcours, semestre) SELECT id, nom_parcours, semestre FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('DROP INDEX UNIQ_71688FBCA87BD67A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__semestre AS SELECT id, num_semestre, debut, fin FROM semestre');
        $this->addSql('DROP TABLE semestre');
        $this->addSql('CREATE TABLE semestre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_semestre VARCHAR(255) DEFAULT NULL COLLATE BINARY, debut DATE DEFAULT NULL, fin DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO semestre (id, num_semestre, debut, fin) SELECT id, num_semestre, debut, fin FROM __temp__semestre');
        $this->addSql('DROP TABLE __temp__semestre');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__etudiant AS SELECT id, num_etudiant, utilisateur, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email FROM etudiant');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('CREATE TABLE etudiant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_etudiant VARCHAR(255) DEFAULT NULL, utilisateur VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, dnn DATE DEFAULT NULL, rse BOOLEAN DEFAULT NULL, redoublant BOOLEAN DEFAULT NULL, tiers_temps BOOLEAN DEFAULT NULL, ajac BOOLEAN DEFAULT NULL, semestre_obtenu VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO etudiant (id, num_etudiant, utilisateur, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email) SELECT id, num_etudiant, utilisateur, nom, prenom, dnn, rse, redoublant, tiers_temps, ajac, semestre_obtenu, adresse, email FROM __temp__etudiant');
        $this->addSql('DROP TABLE __temp__etudiant');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_717E22E31D1C63B3 ON etudiant (utilisateur)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_717E22E3A86D7B25 ON etudiant (num_etudiant)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, nom_parcours, semestre FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_parcours VARCHAR(255) DEFAULT NULL, semestre VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO parcours (id, nom_parcours, semestre) SELECT id, nom_parcours, semestre FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE3CFB1B6A ON parcours (nom_parcours)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__semestre AS SELECT id, num_semestre, debut, fin FROM semestre');
        $this->addSql('DROP TABLE semestre');
        $this->addSql('CREATE TABLE semestre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, num_semestre VARCHAR(255) DEFAULT NULL, debut DATE DEFAULT NULL, fin DATE DEFAULT NULL)');
        $this->addSql('INSERT INTO semestre (id, num_semestre, debut, fin) SELECT id, num_semestre, debut, fin FROM __temp__semestre');
        $this->addSql('DROP TABLE __temp__semestre');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_71688FBCA87BD67A ON semestre (num_semestre)');
    }
}
