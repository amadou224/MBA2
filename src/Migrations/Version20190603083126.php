<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190603083126 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lieux ADD annexe TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD adresse VARCHAR(255) DEFAULT NULL, ADD codepostal VARCHAR(50) DEFAULT NULL, ADD ville VARCHAR(100) DEFAULT NULL, ADD pays VARCHAR(100) DEFAULT NULL, DROP status, CHANGE point_de_prise point_de_prise VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD adresse VARCHAR(255) DEFAULT NULL, ADD pays VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lieux DROP annexe');
        $this->addSql('ALTER TABLE reservation ADD status VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP adresse, DROP codepostal, DROP ville, DROP pays, CHANGE point_de_prise point_de_prise VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user DROP adresse, DROP pays');
    }
}
