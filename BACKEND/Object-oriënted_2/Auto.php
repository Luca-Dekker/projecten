<?php

class Auto
{
    public string $merk;
    public string $type;
    public string $kleur;
    public int $prijs;

    public function __construct($merk, $type, $kleur, $prijs)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->kleur = $kleur;
        $this->prijs = $prijs;
    }
}

