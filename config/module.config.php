<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'sspsponsors-sponsors-controller' => 'SspSponsors\Controller\SponsorsController',
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
    'view_manager' => array(
        'template_path_stack' => array(
            'SspSponsors' => __DIR__ . '/../view',
        ),
    ),
);
