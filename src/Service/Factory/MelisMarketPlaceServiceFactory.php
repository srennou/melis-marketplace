<?php
/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisMarketPlace\Service\Factory;


use MelisMarketPlace\Service\MelisMarketPlaceService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MelisMarketPlaceServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sl)
    {
        $melisMarketPlaceService = new MelisMarketPlaceService();
        $melisMarketPlaceService->setServiceLocator($sl);
        return $melisMarketPlaceService;
    }
}