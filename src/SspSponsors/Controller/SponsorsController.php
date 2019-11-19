<?php

namespace SspSponsors\Controller;

use SspSponsors\Model\SponsorsTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SponsorsController extends AbstractActionController
{
    protected $sponsorsTable;

    public function __construct(SponsorsTable $sponsorsTable)
    {
        $this->sponsorsTable = $sponsorsTable;
    }

    public function indexAction()
    {
        $this->layout()->setTemplate('layout/layout_no_sidebar');

        $sponsors = $this->sponsorsTable->findAll();

        return new ViewModel(array('sponsors' => $sponsors));
    }
}
