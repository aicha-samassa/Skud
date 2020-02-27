<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use App\Repository\CategoryRepository;

/**
 * @Route("/categories")
 */

class CategoriesController extends AbstractController
{
    /**
     * @Route("/rapfr", name="rapfr")
     */
    public function rapfr(PostRepository $postRepository)
    {
        $artcatFr = $postRepository->ArtCatFr("App:Post");
        return $this->render('categories/rapfr.html.twig',[
            'artcatFr' => $artcatFr,

        ]);

        
    }

     /**
     * @Route("/rap-us", name="rap-us")
     */
    public function rapus(PostRepository $postRepository)
    {
        //return $this->render('categories/rap-us.html.twig');
        $artcatUs = $postRepository->ArtCatUs("App:Post");
        return $this->render('categories/rap-us.html.twig',[
            'artcatUs' => $artcatUs,
        ]);
        
        
    }

         /**
     * @Route("/lifestyle-sports", name="lifestyle-sports")
     */
    public function lifestylesports(PostRepository $postRepository)
    {
        

        $artcatLife = $postRepository->ArtCatLife("App:Post");
        return $this->render('categories/lifestyle-sports.html.twig',[
            'artcatLife' => $artcatLife,
        ]);
        
    }


         /**
     * @Route("/interview", name="interview")
     */
    public function interview(PostRepository $postRepository)
    {
        

        $artcatInter = $postRepository->ArtCatInter("App:Post");
        return $this->render('categories/interview.html.twig',[
            'artcatInter' => $artcatInter,
        ]);
        
    }
}
