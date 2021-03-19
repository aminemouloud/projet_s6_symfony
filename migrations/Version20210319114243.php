<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319114243 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choix_ue ADD COLUMN inscription BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__choix_ue AS SELECT id, nom_ue, note, id_fiche FROM choix_ue');
        $this->addSql('DROP TABLE choix_ue');
        $this->addSql('CREATE TABLE choix_ue (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom_ue VARCHAR(255) DEFAULT NULL, note VARCHAR(255) DEFAULT NULL, id_fiche VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO choix_ue (id, nom_ue, note, id_fiche) SELECT id, nom_ue, note, id_fiche FROM __temp__choix_ue');
        $this->addSql('DROP TABLE __temp__choix_ue');
    }
}
