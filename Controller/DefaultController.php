<?php
namespace Striide\DebugBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction($name) 
  {
    return $this->render('StriideDebugBundle:Default:index.html.twig', array(
      'name' => $name
    ));
  }
}
