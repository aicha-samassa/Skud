<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PostRepository $postRepository)
    {
        $maxarticle = $postRepository->MaxArticle();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'maxarticle' => $maxarticle,
        ]);
    }
}
