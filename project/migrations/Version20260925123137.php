<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260925123137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity ADD region_id INT NOT NULL');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C498260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_6A95E9C498260155 ON identity (region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity DROP FOREIGN KEY FK_6A95E9C498260155');
        $this->addSql('DROP INDEX IDX_6A95E9C498260155 ON identity');
        $this->addSql('ALTER TABLE identity DROP region_id');
    }
}
