<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestimonialController extends AbstractController
{
    #[Route('/testimonial', name: 'app_testimonial')]
    public function index(): Response
    {
        // Dummy testimonials data. Replace with your actual data source
        $testimonials = [
            [
                'name' => 'John Doe',
                'message' => 'Excellent service! Highly recommended.',
                'date' => '2024-01-15'
            ],
            [
                'name' => 'Jane Smith',
                'message' => 'Very professional and reliable.',
                'date' => '2024-02-20'
            ],
            [
                'name' => 'Mark Johnson',
                'message' => 'Great quality of work and attention to detail.',
                'date' => '2024-03-10'
            ],
            [
                'name' => 'Mark Johnson',
                'message' => 'Great quality of work and attention to detail.',
                'date' => '2024-03-10'
            ],
            [
                'name' => 'Mark Johnson',
                'message' => 'Great quality of work and attention to detail.',
                'date' => '2024-03-10'
            ],
            [
                'name' => 'Mark Johnson',
                'message' => 'Great quality of work and attention to detail.',
                'date' => '2024-03-10'
            ],
            [
                'name' => 'Mark Johnson',
                'message' => 'Great quality of work and attention to detail.',
                'date' => '2024-03-10'
            ],
        ];

        return $this->render('testimonials/index.html.twig', [
            'testimonials' => $testimonials,
        ]);
    }
}