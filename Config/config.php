<?php
#Caminhos absolutos
$pastaInterna="Cadastro-Login-MVC-php/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'Lib/css/');
define('DIRJS',DIRPAGE.'Lib/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");

#Outras Informações Google ReCaptcha
define("SITEKEY","SUA_SITE_KEY");
define("SECRETKEY","SUA_SECRET_KEY");