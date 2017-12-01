<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
      $task = new Task();
      $task->settitle('');
      $task->setdate(new \DateTime('now'));

      $form = $this->createFormBuilder($task)
        ->add('title', TextType::class)
        ->add('date', DateTimeType::class)
        ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ->getForm();

      $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();0918
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
       }

      return $this->render('AppBundle:Task:create.html.twig', array(
        'form' => $form->createView(),
      ));
    }

    /**
     * @Route("/list")
     */
    public function listAction()
    {

        return $this->render('AppBundle:Task:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Task:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Task:delete.html.twig', array(
            // ...
        ));
    }

}
