<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619142356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE door_interaction ADD interaction_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE refill_interaction ADD interaction_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE serving_interaction ADD interaction_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE tank_interaction ADD interaction_date DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE refill_interaction DROP interaction_date');
        $this->addSql('ALTER TABLE door_interaction DROP interaction_date');
        $this->addSql('ALTER TABLE serving_interaction DROP interaction_date');
        $this->addSql('ALTER TABLE tank_interaction DROP interaction_date');
    }
}
