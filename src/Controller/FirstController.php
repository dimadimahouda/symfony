<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class FirstController extends AbstractController
{
    /**
     * @Route ("/first",name="first")
     */
public function sayHello()
{
   return new Response("<h1>Hello Forma :))</h1>");

}
}