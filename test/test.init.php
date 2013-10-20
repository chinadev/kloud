<?php
if( !defined('DS') ) define( 'DS' , DIRECTORY_SEPARATOR );

// define constant
define( 'IN' , true );

define( 'ROOT' , dirname(__FILE__).  DS .'..' . DS . '_kloud' . DS );
define( 'AROOT' , ROOT .'..'.DS  );
define( 'CROOT' , ROOT . 'core' . DS  );

error_reporting(E_ALL^E_NOTICE);
ini_set( 'display_errors' , true );

include_once( CROOT . 'lib' . DS . 'core.function.php' );
@include_once( AROOT . 'lib' . DS . 'app.function.php' );

include_once( CROOT . 'config' .  DS . 'core.config.php' );
include_once( AROOT . 'config' . DS . 'app.config.php' );