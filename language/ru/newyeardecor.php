<?php
/**
 *
 * @package       New Year Decor
 * @copyright (c) 2018 Татьяна5
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'NYD_USER_SNOW'		=> 'Включить снег',
	'NYD_USER_GARLAND'	=> 'Включить гирлянду',
	'NYD_USER_IMAGE'	=> 'Включить новогоднюю картинку',
));
