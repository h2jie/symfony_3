<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_task_create
        if ('/create' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::createAction',  '_route' => 'app_task_create',);
        }

        // app_task_list
        if ('/list' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::listAction',  '_route' => 'app_task_list',);
        }

        // app_task_delete
        if ('/delete' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::deleteAction',  '_route' => 'app_task_delete',);
        }

        // app_task_update
        if ('/update' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TaskController::updateAction',  '_route' => 'app_task_update',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
