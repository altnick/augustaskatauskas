<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190526125025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE companies ADD paslauga LONGTEXT NOT NULL, ADD specialistas LONGTEXT NOT NULL, ADD pavadinimas LONGTEXT NOT NULL, ADD miestas LONGTEXT NOT NULL, ADD adresas LONGTEXT NOT NULL, ADD darbo_pradzia TIME NOT NULL, ADD darbo_pabaiga TIME NOT NULL, ADD paslaugos_trukme TIME NOT NULL, DROP service, DROP specialist, DROP companiesname, DROP city, DROP address, DROP workfrom, DROP workuntil, DROP duration, CHANGE phonenumber telefono_numeris INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE companies ADD service LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD specialist LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD companiesname LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD city LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD address LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD workfrom TIME NOT NULL, ADD workuntil TIME NOT NULL, ADD duration TIME NOT NULL, DROP paslauga, DROP specialistas, DROP pavadinimas, DROP miestas, DROP adresas, DROP darbo_pradzia, DROP darbo_pabaiga, DROP paslaugos_trukme, CHANGE telefono_numeris phonenumber INT NOT NULL');
    }
}
