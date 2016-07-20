<?php

namespace PatternBundle\Controller;

use PatternBundle\Controller\Patterns\Singleton\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/pattern")
     */
    public function indexAction()
    {
        return $this->render('PatternBundle:Default:index.html.twig');
    }

    /**
     * @Route("/pattern/abstract_factory")
     */
    public function abstractFactoryAction()
    {
        return $this->render('PatternBundle:Pattern:abstractFactory.html.twig');
    }

    /**
     * @Route("/pattern/builder")
     */
    public function builderAction()
    {
        return $this->render('PatternBundle:Pattern:builder.html.twig', [
        ]);
    }

    /**
     * @Route("/pattern/factory_method")
     */
    public function factoryMethodAction()
    {
        return $this->render('PatternBundle:Pattern:factoryMethod.html.twig');
    }

    /**
     * @Route("/pattern/prototype")
     */
    public function prototypeAction()
    {
        return $this->render('PatternBundle:Pattern:prototype.html.twig');
    }

    /**
     * @Route("/pattern/singleton")
     */
    public function singletonAction()
    {
        /**
         * Используем паттерн Одиночки
         */
        $firstProduct = Product::getInstance();
        $secondProduct = Product::getInstance();

        $firstProduct->a = "test";
        $secondProduct->a = "test 2";

        return $this->render('PatternBundle:Pattern:singleton.html.twig', ['test' => $secondProduct]);
    }
}
