<?php

abstract class Vehicule
{
    protected int $masse;
    protected float $vitesse;
    protected string $marque;
    protected string $couleur;
    protected array $dimensions;
    protected string $modePropulsion;

    public function getMasse(): int
    {
        return $this->masse;
    }

    public function setMasse(int $masse): void
    {
        $this->masse = $masse;
    }

    public function getVitesse(): float
    {
        return $this->vitesse;
    }

    public function setVitesse(float $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getDimensions(): array
    {
        return $this->dimensions;
    }

    public function setDimensions(array $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    public function getModePropulsion(): string
    {
        return $this->modePropulsion;
    }

    public function setModePropulsion($modePropulsion): void
    {
        $this->modePropulsion = $modePropulsion;
    }

    public function calculerEnergieCinetique(): float
    {
        $masseVehicule = $this->masse;
        $vitesseVehicule = $this->vitesse;
        $energieCinetique = 0.5 * ($masseVehicule * ($vitesseVehicule ** 2));
        return $energieCinetique;
    }
}
