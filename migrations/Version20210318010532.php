<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318010532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etudiant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur_id VARCHAR(255) DEFAULT NULL, num_etudiant VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, dnn DATE DEFAULT NULL, rse BOOLEAN DEFAULT NULL, redoublant BOOLEAN DEFAULT NULL, tiers_temps BOOLEAN DEFAULT NULL, ajac BOOLEAN DEFAULT NULL, semestre_obtenu VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_717E22E3A86D7B25 ON etudiant (num_etudiant)');
        $this->addSql('CREATE INDEX IDX_717E22E3FB88E14F ON etudiant (utilisateur_id)');
        $this->addSql('DROP INDEX IDX_116A1216DDEAB1A3');
        $this->addSql('DROP INDEX IDX_116A12165577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__fichepedago AS SELECT id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise FROM fichepedago');
        $this->addSql('DROP TABLE fichepedago');
        $this->addSql('CREATE TABLE fichepedago (id_fiche INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, etudiant_id INTEGER DEFAULT NULL, semestre_id INTEGER DEFAULT NULL, annee VARCHAR(255) DEFAULT NULL COLLATE BINARY, rempli BOOLEAN DEFAULT NULL, valide BOOLEAN DEFAULT NULL, transmise BOOLEAN DEFAULT NULL, CONSTRAINT FK_116A1216DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_116A12165577AFDB FOREIGN KEY (semestre_id) REFERENCES semestre (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO fichepedago (id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise) SELECT id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise FROM __temp__fichepedago');
        $this->addSql('DROP TABLE __temp__fichepedago');
        $this->addSql('CREATE INDEX IDX_116A1216DDEAB1A3 ON fichepedago (etudiant_id)');
        $this->addSql('CREATE INDEX IDX_116A12165577AFDB ON fichepedago (semestre_id)');
        $this->addSql('DROP INDEX UNIQ_99B1DEE3CFB1B6A');
        $this->addSql('DROP INDEX IDX_99B1DEE35577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, semestre_id, nom_parcours FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, semestre_id INTEGER DEFAULT NULL, nom_parcours VARCHAR(255) DEFAULT NULL COLLATE BINARY, CONSTRAINT FK_99B1DEE35577AFDB FOREIGN KEY (semestre_id) REFERENCES semestre (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO parcours (id, semestre_id, nom_parcours) SELECT id, semestre_id, nom_parcours FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE3CFB1B6A ON parcours (nom_parcours)');
        $this->addSql('CREATE INDEX IDX_99B1DEE35577AFDB ON parcours (semestre_id)');
        $this->addSql('DROP INDEX IDX_2E490A9B6E38C0DB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ue AS SELECT id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('CREATE TABLE ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, parcours_id INTEGER DEFAULT NULL, code_ue VARCHAR(255) DEFAULT NULL COLLATE BINARY, nom_ue VARCHAR(255) DEFAULT NULL COLLATE BINARY, ects VARCHAR(255) DEFAULT NULL COLLATE BINARY, presenceoblige BOOLEAN DEFAULT NULL, inscription BOOLEAN DEFAULT NULL, note VARCHAR(255) DEFAULT NULL COLLATE BINARY, CONSTRAINT FK_2E490A9B6E38C0DB FOREIGN KEY (parcours_id) REFERENCES parcours (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO ue (id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note) SELECT id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM __temp__ue');
        $this->addSql('DROP TABLE __temp__ue');
        $this->addSql('CREATE INDEX IDX_2E490A9B6E38C0DB ON ue (parcours_id)');
        $this->addSql('DROP INDEX UNIQ_8D93D64950EAE44');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, id_utilisateur, roles, password FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id VARCHAR(255) NOT NULL, id_utilisateur VARCHAR(180)  NULL COLLATE BINARY, roles CLOB  NULL COLLATE BINARY --(DC2Type:json)
        , password VARCHAR(255)  NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO user (id, id_utilisateur, roles, password) SELECT id, id_utilisateur, roles, password FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64950EAE44 ON user (id_utilisateur)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP INDEX IDX_116A1216DDEAB1A3');
        $this->addSql('DROP INDEX IDX_116A12165577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__fichepedago AS SELECT id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise FROM fichepedago');
        $this->addSql('DROP TABLE fichepedago');
        $this->addSql('CREATE TABLE fichepedago (id_fiche INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, etudiant_id INTEGER DEFAULT NULL, semestre_id INTEGER DEFAULT NULL, annee VARCHAR(255) DEFAULT NULL, rempli BOOLEAN DEFAULT NULL, valide BOOLEAN DEFAULT NULL, transmise BOOLEAN DEFAULT NULL, CONSTRAINT FK_116A1216DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO fichepedago (id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise) SELECT id_fiche, etudiant_id, semestre_id, annee, rempli, valide, transmise FROM __temp__fichepedago');
        $this->addSql('DROP TABLE __temp__fichepedago');
        $this->addSql('CREATE INDEX IDX_116A1216DDEAB1A3 ON fichepedago (etudiant_id)');
        $this->addSql('CREATE INDEX IDX_116A12165577AFDB ON fichepedago (semestre_id)');
        $this->addSql('DROP INDEX UNIQ_99B1DEE3CFB1B6A');
        $this->addSql('DROP INDEX IDX_99B1DEE35577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, semestre_id, nom_parcours FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, semestre_id INTEGER DEFAULT NULL, nom_parcours VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO parcours (id, semestre_id, nom_parcours) SELECT id, semestre_id, nom_parcours FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE3CFB1B6A ON parcours (nom_parcours)');
        $this->addSql('CREATE INDEX IDX_99B1DEE35577AFDB ON parcours (semestre_id)');
        $this->addSql('DROP INDEX IDX_2E490A9B6E38C0DB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ue AS SELECT id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('CREATE TABLE ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, parcours_id INTEGER DEFAULT NULL, code_ue VARCHAR(255) DEFAULT NULL, nom_ue VARCHAR(255) DEFAULT NULL, ects VARCHAR(255) DEFAULT NULL, presenceoblige BOOLEAN DEFAULT NULL, inscription BOOLEAN DEFAULT NULL, note VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO ue (id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note) SELECT id, parcours_id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM __temp__ue');
        $this->addSql('DROP TABLE __temp__ue');
        $this->addSql('CREATE INDEX IDX_2E490A9B6E38C0DB ON ue (parcours_id)');
        $this->addSql('DROP INDEX UNIQ_8D93D64950EAE44');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, id_utilisateur, roles, password FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id_utilisateur VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, id VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO user (id, id_utilisateur, roles, password) SELECT id, id_utilisateur, roles, password FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64950EAE44 ON user (id_utilisateur)');
    }
}
