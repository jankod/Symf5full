<?php


namespace App\Controller;


use App\Entity\Task;
use App\Form\TaskType;
use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @param Request $request
     * @return Response
     * @Route("/")
     */
    public function index2(Request $request)
    {
        return $this->render('index.html.twig');
    }
    /**
     * @param Request $request
     * @return Response
     * @Route("/2")
     */
    public function index(Request $request)
    {

        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        $msg = "pero 2 asdsa d";

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            dump($task);
            $msg = "dumpo";
            $msg = $task->getTask();
        }

        return $this->render('index2.html.twig', ['poruka' => $msg, 'form' => $form->createView()]);
    }

}