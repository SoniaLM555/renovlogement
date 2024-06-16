<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ContactFormType;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle form submission, e.g., send an email
            return $this->redirectToRoute('app_home');
        }

        // List of image filenames
        $images = ['realisation1.jpg', 'realisation2.jpg', 'realisation3.jpg'];

        return $this->render('home/index.html.twig', [
            'contactForm' => $form->createView(),
            'images' => $images,
        ]);
    }
}
