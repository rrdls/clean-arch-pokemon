<?php

declare(strict_types=1);

namespace App\Shared\Contracts;

interface PokemonAPI
{
    public function getPokemonById(int $id): ?array;
    public function getPokemonByAlias(string $alias): ?array;
}