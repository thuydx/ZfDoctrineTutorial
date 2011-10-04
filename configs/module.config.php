<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'bugs' => 'Bugs\Controller\BugsController',
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
