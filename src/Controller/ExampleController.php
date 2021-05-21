<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    /**
     * @Route("/api/example", methods={"GET"})
     * @return JsonResponse
     */
    public function example(): JsonResponse
    {
        $data = [
            'data' => 'example data'
        ];

        return $this->json($data);
    }

}