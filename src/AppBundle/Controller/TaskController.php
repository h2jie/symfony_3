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
     //El metodo para insertar nuevo object a base de datos.
     // Hemos creado un formulario para insertar los datos que necesitamos.
     // Se contiene un TextType para insertar titulo, un DateTimeType para
     // insertar tiempo, y un SubmitType para enviar los datos. Utilizamos el
     // metodo handleRequest para procesar los datos del formulario, una vez
     // cuando el formulario es valido se agregar los informacion desde formulario
     // y añade al base de datos con el metodo de Doctrine y Manager, luego con el
     // flush se ejecuta la query y devuelve la vista que tenemos en html.twig

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
     //El metodo para listar todos los datos del base de datos
     // Utilizamos getRepository para recoger los objetos que estan en
     // el base de datos, luego con metodo findAll para devuelve un array
     // con todos los elementos del base de datos.
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
     //El metodo para eliminar un elemento del base de Datos
     // Hemos utilizado IntegerType para introduce el id del elemento
     // que queremos eliminar, y luego utilizamos el metodo handleRequest
     // para pasar los parametros y procesar las informacion del formulario,
     // despues velificamos si el formulario y es valido y añadir los valores
     // del formulario, luego pasa los informacion al base de datos con el metodo
     // Manager via del Doctrine, si no encontrado el id que ha introducido el usuario
     // nos muestra un error de exception, si encontrado lo eliminamos, al final
     // devuelve la visita que tenemos en .html.twig
    public function deleteAction(Request $request)
    {
      $task = new Task();

     $form = $this->createFormBuilder($task)
         ->add('id', IntegerType::class)
         ->add('save', SubmitType::class, array('label' => 'Eliminar Dato'))
         ->getForm();

     $form->handleRequest($request);

     if($form->isSubmitted() && $form->isValid()) {

         $id = $form->get('id')->getData();
         $em = $this->getDoctrine()->getManager();
         $tasca = $em->getRepository(Task::class)->find($id);

         if (!$tasca) {
           return $this->render('AppBundle:Task:fail.html.twig', array(
                  'form' => $form->createView(),
              ));
         }else{
           $em->remove($tasca);
           $em->flush();
         }


     }

       return $this->render('AppBundle:Task:delete.html.twig', array(
           'form' => $form->createView(),
       ));

    }

    /**
     * @Route("/update")
     */
     //El metodo para acturaliar los datos del base Datos
     // Hemos creado un formulario con IntegerType, TextType y DateTimeType
     // para el usuario introduce el id, titulo y tiempo. Utilizamos el metodo
     // handleRequest para procesar las informacion que tiene el formulario, luego
     // verificamos si el formulario esta valiado, y añadimos el objeto con los valores que dan
     // el formulario, despuede con Doctrine nos pasamos estas informacion a la base de datos,
     // con el metodo find nos ir a buscar en el base de datos con el id que ha introducido el
     // usuario, si no existe el id nos devuelve un error de exception, y si ha encontrado el
     // elemento con el id insertamos los valores al título y la fecha del objeto y ejecutaremos
     // la query para persistir el objeto, al final devolvemos los valores de la vista al html.twig.

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
            return $this->render('AppBundle:Task:fail.html.twig', array(
                  'form' => $form->createView(),
              ));
          }else{
            $task->settitle($title);
            $task->setdate($date);
            $em->flush();
          }


      }

        return $this->render('AppBundle:Task:update.html.twig', array(
          'form' => $form->createView(),

        ));
    }

}
