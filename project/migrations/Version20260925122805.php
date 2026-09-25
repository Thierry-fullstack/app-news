<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260925122805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity ADD civility_id INT NOT NULL');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C423D6A298 FOREIGN KEY (civility_id) REFERENCES civility (id)');
        $this->addSql('CREATE INDEX IDX_6A95E9C423D6A298 ON identity (civility_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity DROP FOREIGN KEY FK_6A95E9C423D6A298');
        $this->addSql('DROP INDEX IDX_6A95E9C423D6A298 ON identity');
        $this->addSql('ALTER TABLE identity DROP civility_id');
    }
}
