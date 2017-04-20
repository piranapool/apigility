<?php

namespace Application\Apigility\Rest;

use Zend\ServiceManager\ServiceManager;
use ZF\Rest\AbstractResourceListener as ZendAbstractResourceListener;

class AbstractResourceListener extends ZendAbstractResourceListener
{
    /**
     * Service Manager
     *
     * @var Zend\ServiceManager\ServiceManager
     */
    protected $serviceManager;

    /**
     * Constructor
     *
     * @param Zend\ServiceManager\ServiceManager $serviceManager
     * @return void
     */
    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }

    /**
     * Retrieves Service Manager
     *
     * @return Zend\ServiceManager\ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Returns Doctrine Entity Manager
     *
     * @return Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        return $this->serviceManager->get('doctrine.entitymanager.orm_default');
    }
}
