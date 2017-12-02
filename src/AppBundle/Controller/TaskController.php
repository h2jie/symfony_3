<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
        ->add('save', SubmitType::class, array('label' => 'Crear Datos'))
        ->getForm();

      $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
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
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('AppBundle:Task');
      $task=$repository->findAll();

        return $this->render('AppBundle:Task:list.html.twig', array(
            'Task'=>$task
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction(Request $request)
    {
      $tasques = new Task();

     $form = $this->createFormBuilder($tasques)
         ->add('id', IntegerType::class)
         ->add('save', SubmitType::class, array('label' => 'Eliminar Dato'))
         ->getForm();

     $form->handleRequest($request);

     if($form->isSubmitted() && $form->isValid()) {

         $id = $form->get('id')->getData();
         $em = $this->getDoctrine()->getManager();
         $tasca = $em->getRepository(Task::class)->find($id);

         if (!$tasca) {
             throw $this->createNotFoundException(
                'No product found for id'+$id
             );
         }

         $em->remove($tasca);
         $em->flush();
     }

       return $this->render('AppBundle:Task:delete.html.twig', array(
           'form' => $form->createView(),
       ));

    }

    /**
     * @Route("/update")
     */
    public function updateAction(Request $request)
    {
      $task = new Task();
      $task->setTitle('');
      $task->setDate(new \DateTime('now'));

      $form = $this->createFormBuilder($task)
          ->add('title', TextType::class)
          ->add('date', DateTimeType::class)
          ->add('id', IntegerType::class)
          ->add('save', SubmitType::class, array('label' => 'Actualizar Dato'))
          ->getForm();

          $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()) {

          $id = $form->get('id')->getData();
          $title = $form->get('title')->getData();
          $date = $form->get('date')->getData();
          $em = $this->getDoctrine()->getManager();
          $task = $em->getRepository(Task::class)->find($id);

          if (!$task) {
              throw $this->createNotFoundException(
                  'No product found for id '.$id
              );
          }

          $task->settitle($title);
          $task->setdate($date);

          $em->flush();
      }

        return $this->render('AppBundle:Task:update.html.twig', array(
          'form' => $form->createView(),

        ));
    }

}
