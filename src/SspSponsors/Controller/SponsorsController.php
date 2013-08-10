<?php

namespace SspSponsors\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SponsorsController extends AbstractActionController
{
    public function indexAction()
    {
        $sponsorsTable = $this->serviceLocator->get('SponsorsTable');
        $sponsors = $sponsorsTable->findAll();

        return new ViewModel(array('sponsors' => $sponsors));
    }

    public function fooAction()
    {
        return array();
    }
}
