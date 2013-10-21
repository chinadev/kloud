<?php

if( defined('SAE_APPNAME') )
{
	$GLOBALS['config']['db']['db_host'] = SAE_MYSQL_HOST_M;
	$GLOBALS['config']['db']['db_host_read'] = SAE_MYSQL_HOST_S;
	
	$GLOBALS['config']['db']['db_port'] = SAE_MYSQL_PORT;
	
	$GLOBALS['config']['db']['db_user'] = SAE_MYSQL_USER;
	$GLOBALS['config']['db']['db_password'] = SAE_MYSQL_PASS;
	$GLOBALS['config']['db']['db_name'] = SAE_MYSQL_DB;
	
}
elseif( isset($_SERVER['KDB_NAME']) )
{
	$GLOBALS['config']['db']['db_host'] = $_SERVER['KDB_HOST'];
	$GLOBALS['config']['db']['db_port'] = $_SERVER['KDB_PORT'];
	$GLOBALS['config']['db']['db_user'] = $_SERVER['KDB_USER'];
	$GLOBALS['config']['db']['db_password'] = $_SERVER['KDB_PASSWORD'];
	$GLOBALS['config']['db']['db_name'] = $_SERVER['KDB_NAME'];
}
else
{
	$GLOBALS['config']['db']['db_host'] = 'localhost';
	$GLOBALS['config']['db']['db_port'] = 3306;
	$GLOBALS['config']['db']['db_user'] = 'root';
	$GLOBALS['config']['db']['db_password'] = '';
	$GLOBALS['config']['db']['db_name'] = 'lpdb';

}
