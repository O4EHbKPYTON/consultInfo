<?php

\Core\Routing\Router::add('GET', '/', new \App\Controller\FormController(), 'index');
\Core\Routing\Router::add('GET', '/?isSend=yes', new \App\Controller\FormController(), 'success');
\Core\Routing\Router::add('POST', '/add/', new \App\Controller\FormController(), 'add');