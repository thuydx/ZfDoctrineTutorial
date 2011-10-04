<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'bugs' => 'Bugs\Controller\BugsController',
            ),
            'bugs' => array(
                'parameters' => array(
                    'entityManager' => 'Doctrine\ORM\EntityManager',
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'methods' => array(
                    'setResolver' => array(
                        'resolver' => 'Zend\View\TemplatePathStack',
                        'options'  => array(
                            'script_paths' => array(
                                'bugs' => __DIR__ . '/../views',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
