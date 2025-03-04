<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250304135317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trader ADD sub_category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trader ADD CONSTRAINT FK_C8A621B3F7BFE87C FOREIGN KEY (sub_category_id) REFERENCES sub_category (id)');
        $this->addSql('CREATE INDEX IDX_C8A621B3F7BFE87C ON trader (sub_category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trader DROP FOREIGN KEY FK_C8A621B3F7BFE87C');
        $this->addSql('DROP INDEX IDX_C8A621B3F7BFE87C ON trader');
        $this->addSql('ALTER TABLE trader DROP sub_category_id');
    }
}
