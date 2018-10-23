<?php
/**
 * Created by PhpStorm.
 * User: jennifergrace
 * Date: 10/23/18
 * Time: 3:10 PM
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class ArticleController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooo!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show one space article: %s',
            $slug
        ));
    }
}