<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'sspsponsors-sponsors-controller' => 'SspSponsors\Controller\SponsorsController',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'sidebar' => 'Application\View\Helper\Sidebar',
        ),
    ),
    'router' => array(
        'routes' => array(
            'sponsors-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/sponsors',
                    'defaults' => array(
                        'controller'    => 'sspsponsors-sponsors-controller',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'foo' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/foo',
                            'defaults' => array(
                                'controller' => 'sspsponsors-sponsors-controller',
                                'action'     => 'foo',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Sponsors',
                'route' => 'sponsors-index',
                'lastmod' => '2013-09-08',
                'changefreq' => 'monthly',
                'priority' => '0.5',
                'order' => '30',
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspSponsors' => __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        ),
    ),
);
