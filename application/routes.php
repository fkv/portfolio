<?php
Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
->defaults(array(
    'controller' => 'error_handler'
));

Route::set('asset', 'asset(/<type>(/<file>))',
array(
    'type' => '(css|js)',
    'file' => '[a-zA-Z0-9]+\.(css|js)'
))
->defaults(array(
    'controller' => 'asset',
    'action' => 'process',
));

Route::set('home', 'home(/<action>)')
->defaults(array(
    'controller' => 'page',
    'action' => 'home',
));

Route::set('contact', 'contact(/<action>)')
->defaults(array(
    'controller' => 'page',
    'action' => 'contact',
));

Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(array(
    'controller' => 'page',
    'action'     => 'home',
));
?>
