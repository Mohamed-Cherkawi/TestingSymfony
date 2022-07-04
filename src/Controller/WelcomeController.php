<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // This Class contains a method that is gonna render the twing view for us and second parameter to pass data as an associative array to display it in the UI page
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController {
    /**
     * @Route("/welcome")
     */
    public function homePage(): Response
    {
        return $this->render('welcome.html.twig',[
            'date' => date('l')
        ]);
    }
}