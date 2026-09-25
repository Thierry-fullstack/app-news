<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260925121313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity ADD inscrit_id INT NOT NULL');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C46DCD4FEE FOREIGN KEY (inscrit_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C46DCD4FEE ON identity (inscrit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity DROP FOREIGN KEY FK_6A95E9C46DCD4FEE');
        $this->addSql('DROP INDEX UNIQ_6A95E9C46DCD4FEE ON identity');
        $this->addSql('ALTER TABLE identity DROP inscrit_id');
    }
}
