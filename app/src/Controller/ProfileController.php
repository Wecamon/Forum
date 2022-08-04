<?php

namespace App\Controller;

use App\Form\ProfileFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        $form = $this->createForm(ProfileFormType::class);

        return $this->render('profile/profile.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
}
