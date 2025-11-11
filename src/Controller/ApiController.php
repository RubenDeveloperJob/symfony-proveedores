<?php

namespace App\Controller;

use App\Repository\SupplierRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('/api/suppliers', name: 'api_suppliers', methods: ['GET'])]
    public function index(SupplierRepository $repo): JsonResponse
    {
        $suppliers = $repo->findAll();

        $data = array_map(fn($s) => [
            'id' => $s->getId(),
            'name' => $s->getName(),
            'email' => $s->getEmail(),
            'phone' => $s->getPhone(),
            'type' => $s->getType(),
            'active' => $s->isActive(),
        ], $suppliers);

        return $this->json($data);
    }
}
