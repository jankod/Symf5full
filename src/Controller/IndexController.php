<?php


namespace App\Controller;


use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{


    /**
     * @param Request $request
     * @return Response
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        return $this->render('index.html.twig');
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/2")
     */
    public function index2(Request $request)
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