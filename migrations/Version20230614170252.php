<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230614170252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE door_interaction ADD interaction_id INT NOT NULL');
        $this->addSql('ALTER TABLE door_interaction ADD CONSTRAINT FK_579770D886DEE8F FOREIGN KEY (interaction_id) REFERENCES interaction (id)');
        $this->addSql('CREATE INDEX IDX_579770D886DEE8F ON door_interaction (interaction_id)');
        $this->addSql('ALTER TABLE fill_data ADD object_iot_id INT NOT NULL');
        $this->addSql('ALTER TABLE fill_data ADD CONSTRAINT FK_300CAC5B6869444 FOREIGN KEY (object_iot_id) REFERENCES object_iot (id)');
        $this->addSql('CREATE INDEX IDX_300CAC5B6869444 ON fill_data (object_iot_id)');
        $this->addSql('ALTER TABLE interaction ADD object_iot_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE interaction ADD CONSTRAINT FK_378DFDA7B6869444 FOREIGN KEY (object_iot_id) REFERENCES object_iot (id)');
        $this->addSql('CREATE INDEX IDX_378DFDA7B6869444 ON interaction (object_iot_id)');
        $this->addSql('ALTER TABLE object_iot ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE object_iot ADD CONSTRAINT FK_CA015775A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CA015775A76ED395 ON object_iot (user_id)');
        $this->addSql('ALTER TABLE pet ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE pet ADD CONSTRAINT FK_E4529B85A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E4529B85A76ED395 ON pet (user_id)');
        $this->addSql('ALTER TABLE refill_interaction ADD interaction_id INT NOT NULL');
        $this->addSql('ALTER TABLE refill_interaction ADD CONSTRAINT FK_52F4C97C886DEE8F FOREIGN KEY (interaction_id) REFERENCES interaction (id)');
        $this->addSql('CREATE INDEX IDX_52F4C97C886DEE8F ON refill_interaction (interaction_id)');
        $this->addSql('ALTER TABLE serving_interaction ADD interaction_id INT NOT NULL');
        $this->addSql('ALTER TABLE serving_interaction ADD CONSTRAINT FK_2CB11E1B886DEE8F FOREIGN KEY (interaction_id) REFERENCES interaction (id)');
        $this->addSql('CREATE INDEX IDX_2CB11E1B886DEE8F ON serving_interaction (interaction_id)');
        $this->addSql('ALTER TABLE tank_interaction ADD interaction_id INT NOT NULL');
        $this->addSql('ALTER TABLE tank_interaction ADD CONSTRAINT FK_A0B01CA2886DEE8F FOREIGN KEY (interaction_id) REFERENCES interaction (id)');
        $this->addSql('CREATE INDEX IDX_A0B01CA2886DEE8F ON tank_interaction (interaction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interaction DROP FOREIGN KEY FK_378DFDA7B6869444');
        $this->addSql('DROP INDEX IDX_378DFDA7B6869444 ON interaction');
        $this->addSql('ALTER TABLE interaction DROP object_iot_id');
        $this->addSql('ALTER TABLE object_iot DROP FOREIGN KEY FK_CA015775A76ED395');
        $this->addSql('DROP INDEX IDX_CA015775A76ED395 ON object_iot');
        $this->addSql('ALTER TABLE object_iot DROP user_id');
        $this->addSql('ALTER TABLE pet DROP FOREIGN KEY FK_E4529B85A76ED395');
        $this->addSql('DROP INDEX IDX_E4529B85A76ED395 ON pet');
        $this->addSql('ALTER TABLE pet DROP user_id');
        $this->addSql('ALTER TABLE refill_interaction DROP FOREIGN KEY FK_52F4C97C886DEE8F');
        $this->addSql('DROP INDEX IDX_52F4C97C886DEE8F ON refill_interaction');
        $this->addSql('ALTER TABLE refill_interaction DROP interaction_id');
        $this->addSql('ALTER TABLE serving_interaction DROP FOREIGN KEY FK_2CB11E1B886DEE8F');
        $this->addSql('DROP INDEX IDX_2CB11E1B886DEE8F ON serving_interaction');
        $this->addSql('ALTER TABLE serving_interaction DROP interaction_id');
        $this->addSql('ALTER TABLE tank_interaction DROP FOREIGN KEY FK_A0B01CA2886DEE8F');
        $this->addSql('DROP INDEX IDX_A0B01CA2886DEE8F ON tank_interaction');
        $this->addSql('ALTER TABLE tank_interaction DROP interaction_id');
        $this->addSql('ALTER TABLE fill_data DROP FOREIGN KEY FK_300CAC5B6869444');
        $this->addSql('DROP INDEX IDX_300CAC5B6869444 ON fill_data');
        $this->addSql('ALTER TABLE fill_data DROP object_iot_id');
        $this->addSql('ALTER TABLE door_interaction DROP FOREIGN KEY FK_579770D886DEE8F');
        $this->addSql('DROP INDEX IDX_579770D886DEE8F ON door_interaction');
        $this->addSql('ALTER TABLE door_interaction DROP interaction_id');
    }
}
