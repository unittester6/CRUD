<?php

use icrud\Router;

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^create$', ['controller' => 'Main', 'action' => 'create']);
Router::add('^read$', ['controller' => 'Main', 'action' => 'read']);
Router::add('^update$', ['controller' => 'Main', 'action' => 'update']);

/**
  ПОТОМУ ЧТО РОУТЕРУ НЕЛЬЗЯ УКАЗАТЬ ПОСТОМ ИЛИ ГЕТОМ МЫ ОТПРАВИЛИ. ПОЭТОМУ ПРОСТО РАЗНЫЕ НАЗВАНИЕЯ НА ГЕТ И ПОСТ
*/
Router::add('^postUpdate$', ['controller' => 'Main', 'action' => 'postUpdate']);

Router::add('^delete$', ['controller' => 'Main', 'action' => 'delete']);
