<?php
require_once 'core/app.php';
$app = new App();

$valid_paths  = array( // Core
                       'allowedips',
                       'backup',
                       'login',
                       'logout',
                       'menu',
                       'menuitem',
                       'settings',
                       'system-info',
                       'tweets',
                       'user',
                       // Custom
                      );

$dict            = $app->beginDict();
$dict['menu']    = $app->loadMenu(array('Menus'               => array( 'menu' => 'Menu', 'menuitem' => 'Menu item', ),
                                        'Twitter'             => array( 'tweets' => 'Tweets', ),
                                        'Users'               => array( 'user' => 'Users', ),
                                        ));

## Router
include_once 'core/router.php';