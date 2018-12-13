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
	'ACP_NEWYEARDECOR'					=> 'Новогодние украшения',
	'ACP_NEWYEARDECOR_EXPLAIN'			=> 'Настройки',
	//
	'ACP_NYD_SNOW_TYPE'					=> 'Снег',
	'ACP_NYD_SNOW_POSITION'				=> 'Расположение снега',
	'ACP_NYD_SNOW_HEADER'				=> 'В шапке',
	'ACP_NYD_SNOW_BACKGROUND'			=> 'На фоне',
	'ACP_NYD_INTERACTION_SNOW'			=> 'Интерактивный',
	//
	'ACP_NYD_GARLAND_TYPE'				=> 'Гирлянда',
	//
	'ACP_NYD_IMAGE'						=> 'Картинка',
));
