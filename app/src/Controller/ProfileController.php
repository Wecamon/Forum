<?php

namespace App\Controller;

use App\Form\ProfileFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(ProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $user->setAge($form->getData()->getAge());
            $user->setGender($form->getData()->getGender());
            $user->setBio($form->getData()->getBio());
            
            $entityManager->flush();
        }

        return $this->render('profile/profile.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
}
