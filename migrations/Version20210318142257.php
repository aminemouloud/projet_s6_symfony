<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210318142257 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_116A1216DDEAB1A3');
        $this->addSql('DROP INDEX IDX_116A12165577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__fichepedago AS SELECT id_fiche, annee, rempli, valide, transmise FROM fichepedago');
        $this->addSql('DROP TABLE fichepedago');
        $this->addSql('CREATE TABLE fichepedago (id_fiche INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, annee VARCHAR(255) DEFAULT NULL COLLATE BINARY, rempli BOOLEAN DEFAULT NULL, valide BOOLEAN DEFAULT NULL, transmise BOOLEAN DEFAULT NULL, etudiant VARCHAR(255) DEFAULT NULL, semestre VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO fichepedago (id_fiche, annee, rempli, valide, transmise) SELECT id_fiche, annee, rempli, valide, transmise FROM __temp__fichepedago');
        $this->addSql('DROP TABLE __temp__fichepedago');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_116A1216717E22E3 ON fichepedago (etudiant)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_116A121671688FBC ON fichepedago (semestre)');
        $this->addSql('DROP INDEX UNIQ_99B1DEE3CFB1B6A');
        $this->addSql('DROP INDEX IDX_99B1DEE35577AFDB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, nom_parcours FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_parcours VARCHAR(255) DEFAULT NULL COLLATE BINARY, semestre VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO parcours (id, nom_parcours) SELECT id, nom_parcours FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE3CFB1B6A ON parcours (nom_parcours)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE371688FBC ON parcours (semestre)');
        $this->addSql('DROP INDEX IDX_2E490A9B6E38C0DB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ue AS SELECT id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('CREATE TABLE ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code_ue VARCHAR(255) DEFAULT NULL COLLATE BINARY, nom_ue VARCHAR(255) DEFAULT NULL COLLATE BINARY, ects VARCHAR(255) DEFAULT NULL COLLATE BINARY, presenceoblige BOOLEAN DEFAULT NULL, inscription BOOLEAN DEFAULT NULL, note VARCHAR(255) DEFAULT NULL COLLATE BINARY, parcours VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO ue (id, code_ue, nom_ue, ects, presenceoblige, inscription, note) SELECT id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM __temp__ue');
        $this->addSql('DROP TABLE __temp__ue');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2E490A9B99B1DEE3 ON ue (parcours)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_116A1216717E22E3');
        $this->addSql('DROP INDEX UNIQ_116A121671688FBC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__fichepedago AS SELECT id_fiche, annee, rempli, valide, transmise FROM fichepedago');
        $this->addSql('DROP TABLE fichepedago');
        $this->addSql('CREATE TABLE fichepedago (id_fiche INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, annee VARCHAR(255) DEFAULT NULL, rempli BOOLEAN DEFAULT NULL, valide BOOLEAN DEFAULT NULL, transmise BOOLEAN DEFAULT NULL, etudiant_id INTEGER DEFAULT NULL, semestre_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO fichepedago (id_fiche, annee, rempli, valide, transmise) SELECT id_fiche, annee, rempli, valide, transmise FROM __temp__fichepedago');
        $this->addSql('DROP TABLE __temp__fichepedago');
        $this->addSql('CREATE INDEX IDX_116A1216DDEAB1A3 ON fichepedago (etudiant_id)');
        $this->addSql('CREATE INDEX IDX_116A12165577AFDB ON fichepedago (semestre_id)');
        $this->addSql('DROP INDEX UNIQ_99B1DEE3CFB1B6A');
        $this->addSql('DROP INDEX UNIQ_99B1DEE371688FBC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__parcours AS SELECT id, nom_parcours FROM parcours');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('CREATE TABLE parcours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_parcours VARCHAR(255) DEFAULT NULL, semestre_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO parcours (id, nom_parcours) SELECT id, nom_parcours FROM __temp__parcours');
        $this->addSql('DROP TABLE __temp__parcours');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_99B1DEE3CFB1B6A ON parcours (nom_parcours)');
        $this->addSql('CREATE INDEX IDX_99B1DEE35577AFDB ON parcours (semestre_id)');
        $this->addSql('DROP INDEX UNIQ_2E490A9B99B1DEE3');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ue AS SELECT id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('CREATE TABLE ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code_ue VARCHAR(255) DEFAULT NULL, nom_ue VARCHAR(255) DEFAULT NULL, ects VARCHAR(255) DEFAULT NULL, presenceoblige BOOLEAN DEFAULT NULL, inscription BOOLEAN DEFAULT NULL, note VARCHAR(255) DEFAULT NULL, parcours_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO ue (id, code_ue, nom_ue, ects, presenceoblige, inscription, note) SELECT id, code_ue, nom_ue, ects, presenceoblige, inscription, note FROM __temp__ue');
        $this->addSql('DROP TABLE __temp__ue');
        $this->addSql('CREATE INDEX IDX_2E490A9B6E38C0DB ON ue (parcours_id)');
    }
}
