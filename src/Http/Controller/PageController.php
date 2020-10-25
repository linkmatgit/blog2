<?php declare(strict_types=1);

namespace App\Http\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {

  /**
   * @Route("/", name="app_home")
   */
  public function home() {

   return $this->render('pages/index.html.twig');
  }

}
