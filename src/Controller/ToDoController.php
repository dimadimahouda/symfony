<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends AbstractController
{
    /**
     * @Route("/listeToDo/{name}/{prenom}/{age}/{section}", name="liste")
     */
    public function indexAction($name, $prenom, $age, $section): Response
    {
        return $this->render('ticket/index.html.twig', [
            'name' => $name,
            'prenom' => $prenom,
            'age' => $age,
            'section' => $section
        ]);
    }
}
