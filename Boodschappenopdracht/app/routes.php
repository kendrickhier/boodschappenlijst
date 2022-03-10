<?php

$router->get('groceries', 'PagesController@home');
$router->get('groceries/create', 'PagesController@create');

$router->post('groceries/add-grocery', 'GroceriesController@create');