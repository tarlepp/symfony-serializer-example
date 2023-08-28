<?php

namespace App\DTO;

class Human
{
    /**
     * @param Sibling[] $siblings
     */
    public function __construct(
        public string $name = '',
        public array $siblings = [],
    ) {
    }
}
