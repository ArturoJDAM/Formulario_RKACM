<?php

namespace App\Entity;

use App\Repository\ViviendaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ViviendaRepository::class)]
#[Broadcast]
class Vivienda
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $antiguedad = null;

    #[ORM\Column(nullable: true)]
    private ?int $banyos = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $carpinteria_exterior = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $carpinteria_interior = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $conservacion = null;

    #[ORM\Column(nullable: true)]
    private ?float $consumo_energia = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?float $emisiones_co2 = null;

    #[ORM\Column]
    private ?bool $garaje = null;

    #[ORM\Column(nullable: true)]
    private ?int $habitaciones = null;

    #[ORM\Column(length: 40)]
    private ?string $localidad = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: true)]
    private ?int $num_plantas = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $orientacion = null;

    #[ORM\Column(nullable: true)]
    private ?int $planta = null;

    #[ORM\Column]
    private ?int $precio = null;

    #[ORM\Column(length: 20)]
    private ?string $referencia = null;

    #[ORM\Column(nullable: true)]
    private ?float $superficie_construida = null;

    #[ORM\Column(nullable: true)]
    private ?float $superficie_parcela = null;

    #[ORM\Column(nullable: true)]
    private ?float $superficie_util = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $tipo_cocina = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $tipo_propiedad = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $tipo_exterior = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $tipo_operacion = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $tipo_suelo = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $vistas = null;

    #[ORM\Column(length: 100)]
    private ?string $zona = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $imagenes = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAntiguedad(): ?int
    {
        return $this->antiguedad;
    }

    public function setAntiguedad(?int $antiguedad): static
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    public function getBanyos(): ?int
    {
        return $this->banyos;
    }

    public function setBanyos(?int $banyos): static
    {
        $this->banyos = $banyos;

        return $this;
    }

    public function getCarpinteriaExterior(): ?string
    {
        return $this->carpinteria_exterior;
    }

    public function setCarpinteriaExterior(?string $carpinteria_exterior): static
    {
        $this->carpinteria_exterior = $carpinteria_exterior;

        return $this;
    }

    public function getCarpinteriaInterior(): ?string
    {
        return $this->carpinteria_interior;
    }

    public function setCarpinteriaInterior(?string $carpinteria_interior): static
    {
        $this->carpinteria_interior = $carpinteria_interior;

        return $this;
    }

    public function getConservacion(): ?string
    {
        return $this->conservacion;
    }

    public function setConservacion(?string $conservacion): static
    {
        $this->conservacion = $conservacion;

        return $this;
    }

    public function getConsumoEnergia(): ?float
    {
        return $this->consumo_energia;
    }

    public function setConsumoEnergia(?float $consumo_energia): static
    {
        $this->consumo_energia = $consumo_energia;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getEmisionesCo2(): ?float
    {
        return $this->emisiones_co2;
    }

    public function setEmisionesCo2(?float $emisiones_co2): static
    {
        $this->emisiones_co2 = $emisiones_co2;

        return $this;
    }

    public function isGaraje(): ?bool
    {
        return $this->garaje;
    }

    public function setGaraje(bool $garaje): static
    {
        $this->garaje = $garaje;

        return $this;
    }

    public function getHabitaciones(): ?int
    {
        return $this->habitaciones;
    }

    public function setHabitaciones(?int $habitaciones): static
    {
        $this->habitaciones = $habitaciones;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): static
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNumPlantas(): ?int
    {
        return $this->num_plantas;
    }

    public function setNumPlantas(?int $num_plantas): static
    {
        $this->num_plantas = $num_plantas;

        return $this;
    }

    public function getOrientacion(): ?string
    {
        return $this->orientacion;
    }

    public function setOrientacion(?string $orientacion): static
    {
        $this->orientacion = $orientacion;

        return $this;
    }

    public function getPlanta(): ?int
    {
        return $this->planta;
    }

    public function setPlanta(?int $planta): static
    {
        $this->planta = $planta;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(string $referencia): static
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getSuperficieConstruida(): ?float
    {
        return $this->superficie_construida;
    }

    public function setSuperficieConstruida(?float $superficie_construida): static
    {
        $this->superficie_construida = $superficie_construida;

        return $this;
    }

    public function getSuperficieParcela(): ?float
    {
        return $this->superficie_parcela;
    }

    public function setSuperficieParcela(?float $superficie_parcela): static
    {
        $this->superficie_parcela = $superficie_parcela;

        return $this;
    }

    public function getSuperficieUtil(): ?float
    {
        return $this->superficie_util;
    }

    public function setSuperficieUtil(?float $superficie_util): static
    {
        $this->superficie_util = $superficie_util;

        return $this;
    }

    public function getTipoCocina(): ?string
    {
        return $this->tipo_cocina;
    }

    public function setTipoCocina(?string $tipo_cocina): static
    {
        $this->tipo_cocina = $tipo_cocina;

        return $this;
    }

    public function getTipoPropiedad(): ?string
    {
        return $this->tipo_propiedad;
    }

    public function setTipoPropiedad(?string $tipo_propiedad): static
    {
        $this->tipo_propiedad = $tipo_propiedad;

        return $this;
    }

    public function getTipoExterior(): ?string
    {
        return $this->tipo_exterior;
    }

    public function setTipoExterior(?string $tipo_exterior): static
    {
        $this->tipo_exterior = $tipo_exterior;

        return $this;
    }

    public function getTipoOperacion(): ?string
    {
        return $this->tipo_operacion;
    }

    public function setTipoOperacion(?string $tipo_operacion): static
    {
        $this->tipo_operacion = $tipo_operacion;

        return $this;
    }

    public function getTipoSuelo(): ?string
    {
        return $this->tipo_suelo;
    }

    public function setTipoSuelo(?string $tipo_suelo): static
    {
        $this->tipo_suelo = $tipo_suelo;

        return $this;
    }

    public function getVistas(): ?string
    {
        return $this->vistas;
    }

    public function setVistas(?string $vistas): static
    {
        $this->vistas = $vistas;

        return $this;
    }

    public function getZona(): ?string
    {
        return $this->zona;
    }

    public function setZona(string $zona): static
    {
        $this->zona = $zona;

        return $this;
    }

    public function getImagenes(): array
    {
        return $this->imagenes;
    }

    public function setImagenes(array $imagenes): static
    {
        $this->imagenes = $imagenes;

        return $this;
    }
}
