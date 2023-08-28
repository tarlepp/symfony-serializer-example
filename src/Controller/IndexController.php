<?php

namespace App\Controller;

use App\DTO\Human;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[AsController]
class IndexController
{
    #[Route(
        path: '/',
        methods: [Request::METHOD_GET],
    )]
    public function __invoke(SerializerInterface $serializer): void
    {
        $json = <<<JSON
{
   "name": "David",
   "siblings": [
       {
            "name": "Brother's Name"
       }
   ]
}
JSON;

        $x = $serializer->deserialize($json, Human::class, 'json');

        dd($x);
    }
}
