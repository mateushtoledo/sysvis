<?php
defined('BASEPATH') OR exit('O acesso direto a esse script não é permitido');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/
// Controlador padrão
$route['default_controller'] = 'sysvis';
// Erro 404
$route['404_override'] = 'sysvis/errorPage';
// Traduzir URLs ?
$route['translate_uri_dashes'] = FALSE;
// Home do sistema
$route['home'] = 'sysvis';
// Gráficos na Home
$route['charts'] = 'sysvis';