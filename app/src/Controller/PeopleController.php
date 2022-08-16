<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeopleController extends AbstractController
{
    #[Route('/people', name: 'app_people')]
    public function index(UserRepository $userRepository): Response
    {
        dd($userRepository->findOneBy(['username' => 'test']));
        return $this->render('people/people.html.twig', [
            'users' => $userRepository->findAll()
        ]);
    }
}
