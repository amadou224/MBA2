<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626113251 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chauffeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, adresse VARCHAR(150) DEFAULT NULL, ville VARCHAR(150) DEFAULT NULL, email VARCHAR(150) NOT NULL, telfix VARCHAR(100) DEFAULT NULL, telportable VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depart_destination (id INT AUTO_INCREMENT NOT NULL, depart VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, prix_total DOUBLE PRECISION NOT NULL, tva DOUBLE PRECISION NOT NULL, hors_taxe DOUBLE PRECISION DEFAULT NULL, status VARCHAR(150) DEFAULT NULL, date_facture DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu_de_depart (id INT AUTO_INCREMENT NOT NULL, point_de_prise VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieux (id INT AUTO_INCREMENT NOT NULL, lieux VARCHAR(150) NOT NULL, annexe TINYINT(1) NOT NULL, tarif INT DEFAULT NULL, nombre_de_passager_minimum INT DEFAULT NULL, horaires LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date_message DATETIME NOT NULL, path_msg VARCHAR(255) NOT NULL, INDEX IDX_B6BD307FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, depart_destination_id INT NOT NULL, trajet_id INT DEFAULT NULL, facture_id INT DEFAULT NULL, trajet_lieux_id INT NOT NULL, horraire VARCHAR(50) NOT NULL, nb_passager INT NOT NULL, date_reservation DATETIME NOT NULL, date_depart DATETIME NOT NULL, point_de_prise VARCHAR(255) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, codepostal VARCHAR(50) DEFAULT NULL, ville VARCHAR(100) DEFAULT NULL, pays VARCHAR(100) DEFAULT NULL, horaires_type TINYINT(1) NOT NULL, statu VARCHAR(255) DEFAULT NULL, INDEX IDX_42C84955A76ED395 (user_id), UNIQUE INDEX UNIQ_42C849557514C89E (depart_destination_id), INDEX IDX_42C84955D12A823 (trajet_id), UNIQUE INDEX UNIQ_42C849557F2DEE08 (facture_id), INDEX IDX_42C84955F5D20488 (trajet_lieux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supplement (id INT AUTO_INCREMENT NOT NULL, facture_id INT NOT NULL, derniere_minute TINYINT(1) NOT NULL, option_annulation TINYINT(1) NOT NULL, horraire_demande TINYINT(1) NOT NULL, navette_nuit TINYINT(1) NOT NULL, prise_domicile TINYINT(1) NOT NULL, mai_decembre TINYINT(1) NOT NULL, INDEX IDX_15A73C97F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajet (id INT AUTO_INCREMENT NOT NULL, vehicule_id INT DEFAULT NULL, chauffeur_id INT DEFAULT NULL, date_trajet DATETIME NOT NULL, INDEX IDX_2B5BA98C4A4A3511 (vehicule_id), INDEX IDX_2B5BA98C85C0B3BE (chauffeur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajet_lieux (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(10) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, codepostal VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, ville VARCHAR(100) DEFAULT NULL, telfixe VARCHAR(50) DEFAULT NULL, telportable VARCHAR(50) DEFAULT NULL, password VARCHAR(100) NOT NULL, date_creation DATETIME NOT NULL, admin TINYINT(1) DEFAULT NULL, professionnel TINYINT(1) DEFAULT NULL, nomsociete VARCHAR(150) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, pays VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, type_vehicule VARCHAR(100) NOT NULL, place INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849557514C89E FOREIGN KEY (depart_destination_id) REFERENCES depart_destination (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D12A823 FOREIGN KEY (trajet_id) REFERENCES trajet (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849557F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F5D20488 FOREIGN KEY (trajet_lieux_id) REFERENCES lieux (id)');
        $this->addSql('ALTER TABLE supplement ADD CONSTRAINT FK_15A73C97F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C4A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C85C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES chauffeur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C85C0B3BE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849557514C89E');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849557F2DEE08');
        $this->addSql('ALTER TABLE supplement DROP FOREIGN KEY FK_15A73C97F2DEE08');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F5D20488');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D12A823');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C4A4A3511');
        $this->addSql('DROP TABLE chauffeur');
        $this->addSql('DROP TABLE depart_destination');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE lieu_de_depart');
        $this->addSql('DROP TABLE lieux');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE supplement');
        $this->addSql('DROP TABLE trajet');
        $this->addSql('DROP TABLE trajet_lieux');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vehicule');
    }
}
