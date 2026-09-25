<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260925121633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE portrait (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, identity_id INT NOT NULL, UNIQUE INDEX UNIQ_954034FBFF3ED4A8 (identity_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE portrait ADD CONSTRAINT FK_954034FBFF3ED4A8 FOREIGN KEY (identity_id) REFERENCES identity (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE portrait DROP FOREIGN KEY FK_954034FBFF3ED4A8');
        $this->addSql('DROP TABLE portrait');
    }
}
