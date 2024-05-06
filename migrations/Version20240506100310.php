<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240506100310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vivienda (id INT AUTO_INCREMENT NOT NULL, antiguedad INT DEFAULT NULL, banyos INT DEFAULT NULL, carpinteria_exterior VARCHAR(100) DEFAULT NULL, carpinteria_interior VARCHAR(100) DEFAULT NULL, conservacion VARCHAR(80) DEFAULT NULL, consumo_energia DOUBLE PRECISION DEFAULT NULL, descripcion VARCHAR(255) NOT NULL, emisiones_co2 DOUBLE PRECISION DEFAULT NULL, garaje TINYINT(1) NOT NULL, habitaciones INT DEFAULT NULL, localidad VARCHAR(40) NOT NULL, nombre VARCHAR(255) NOT NULL, num_plantas INT DEFAULT NULL, orientacion VARCHAR(60) DEFAULT NULL, planta INT DEFAULT NULL, precio INT NOT NULL, referencia VARCHAR(20) NOT NULL, superficie_construida DOUBLE PRECISION DEFAULT NULL, superficie_parcela DOUBLE PRECISION DEFAULT NULL, superficie_util DOUBLE PRECISION DEFAULT NULL, tipo_cocina VARCHAR(100) DEFAULT NULL, tipo_propiedad VARCHAR(100) DEFAULT NULL, tipo_exterior VARCHAR(60) DEFAULT NULL, tipo_operacion VARCHAR(40) DEFAULT NULL, tipo_suelo VARCHAR(60) DEFAULT NULL, vistas VARCHAR(60) DEFAULT NULL, zona VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vivienda');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
