<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // This Class contains a method that is gonna render the twing view for us and second parameter to pass data as an associative array to display it in the UI page
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository ;

class ProductsController extends AbstractController {
    /**
     * @Route("/")
     */
    public function homePage(ProductRepository $repo): Response
    {
        $bikes = $repo -> findBy([]) ;
        return $this->render('homepage.html.twig',[
            'bikes' => $bikes
        ]);
    }
}