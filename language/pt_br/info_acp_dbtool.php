<?php
/**
*
* Database Optimize & Repair Tool [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by maximuspoder (c) 2017 [ver 1.1.2] (https://github.com/phpBBTraducoes)
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_OPTIMIZE_REPAIR'	=> 'Otimizar &amp; Reparar',
	'OPTIMIZE_LOG'			=> '<strong>Tabelas da Base de Dados otimizadas</strong><br />» %s',
	'REPAIR_LOG'			=> '<strong>Tabelas da Base de Dados reparadas</strong><br />» %s',
	'CHECK_LOG'				=> '<strong>Tabelas da Base de Dados checadas</strong><br />» %s',
));
