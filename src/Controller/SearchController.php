<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
            'search_form' => $searchForm->createView(),
        ]);
    }
}
