<?php
/**
 *
 * Confirm Email. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, kinerity, http://www.layer-3.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'CONFIRM_EMAIL'			=> 'Подтвердите адрес e-mail',
	'CONFIRM_EMAIL_ERROR'	=> 'Адреса e-mail не совпадают.',
));
