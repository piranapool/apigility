<?php

namespace Application\Apigility\Rpc;

use Zend\Mvc\Controller\AbstractActionController as ZendAbstractActionController;
use Zend\Mvc\Controller\ControllerManager;

class AbstractActionController extends ZendAbstractActionController
{
    /**
     * Controller Manager
     *
     * @var Zend\Mvc\Controller\ControllerManager
     */
    protected $controllerManager;

    /**
     * Constructor
     *
     * @param Zend\Mvc\Controller\ControllerManager $controllerManager
     * @return void
     */
    public function __construct(ControllerManager $controllerManager)
    {
        $this->controllerManager = $controllerManager;
    }

    /**
     * Returns Doctrine Entity Manager
     *
     * @return Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        return $this->controllerManager->getServiceLocator()->get('doctrine.entitymanager.orm_default');
    }
}
