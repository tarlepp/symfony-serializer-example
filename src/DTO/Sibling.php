<?php

namespace App\DTO;

readonly class Sibling
{
    public function __construct(
        public string $name = '',
    ) {
    }
}
