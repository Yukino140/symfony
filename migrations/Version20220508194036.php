<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220508194036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE soutenance (id INT AUTO_INCREMENT NOT NULL, etudiant_id INT NOT NULL, enseignant_id INT NOT NULL, numjury INT NOT NULL, date_soutenance DATE NOT NULL, note DOUBLE PRECISION NOT NULL, INDEX IDX_4D59FF6EDDEAB1A3 (etudiant_id), INDEX IDX_4D59FF6EE455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6EDDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6EE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE soutenance');
        $this->addSql('ALTER TABLE enseignant CHANGE nom nom VARCHAR(15) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(15) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE etudiant CHANGE nom nom VARCHAR(15) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(15) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
