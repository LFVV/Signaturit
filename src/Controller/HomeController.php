<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function index(): Response
    {
        $title = 'Home-Signaturit';
        $content_title = 'What would you like to do?';
        $content_description = 'PLANTEAMIENTO INICIAL : ';
        return $this->render('home/index.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description
        ]);
    }

    public function winner(): Response
    {
        $title = 'Who wins the trial?';
        $content_title = 'Calculate which part will win';
        $content_description = 'Enter the signatures of each of the two contracts and calculate who will win the trial.';
        return $this->render('home/winner.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description
        ]);
    }

    public function minimum_signature(): Response
    {
        $title = 'What signatures do I need?';
        $content_title = 'Calculate the minimum signature to win';
        $content_description = 'Enter the signatures of the contract to be evaluated and those of the opponent to know the minimum signature to win, if possible.';
        return $this->render('home/minimum_signature.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description
        ]);
    }

}
