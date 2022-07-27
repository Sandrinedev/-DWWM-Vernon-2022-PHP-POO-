<?php

// Le mot-clé 'final' bloque la possibilité d'hériter la classe
final class Berline extends Voiture
{
    private int $nbrPortes =5;

    public function getNbrPortes(): int
    {
        return $this-> nbrPortes;
    }

    public function setNbrPortes(string $nbrPortes)
    {
        $this->nbrPortes = $nbrPortes;
    }
}
