<?php


namespace App\Controller;


use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\AbstractString;
use Symfony\Component\String\UnicodeString;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/")
     */
    public function index()
    {
        
        $name = "pero";
        return $this->render('index.html.twig', ['name' => $name]);
    }

}