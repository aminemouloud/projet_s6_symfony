<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319004508 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ue ADD COLUMN id_fiche VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__ue AS SELECT id, code_ue, nom_ue, parcours, semestre, ects, presenceoblige, inscription, note FROM ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('CREATE TABLE ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code_ue VARCHAR(255) DEFAULT NULL, nom_ue VARCHAR(255) DEFAULT NULL, parcours VARCHAR(255) DEFAULT NULL, semestre VARCHAR(255) DEFAULT NULL, ects VARCHAR(255) DEFAULT NULL, presenceoblige BOOLEAN DEFAULT NULL, inscription BOOLEAN DEFAULT NULL, note VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO ue (id, code_ue, nom_ue, parcours, semestre, ects, presenceoblige, inscription, note) SELECT id, code_ue, nom_ue, parcours, semestre, ects, presenceoblige, inscription, note FROM __temp__ue');
        $this->addSql('DROP TABLE __temp__ue');
    }
}
