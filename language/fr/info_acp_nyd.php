<?php
/**
 *
 * New Year Decor. An extension for the phpBB Forum Software package.
 * French translation by Galixte (https://www.galixte.com)
 *
 * @copyright (c) 2018 Татьяна5
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_NEWYEARDECOR'					=> 'Décorations des fêtes de fin d’année',
	'ACP_NEWYEARDECOR_EXPLAIN'			=> 'Paramètres',
	//
	'ACP_NYD_SNOW_TYPE'					=> 'Type de neige',
	'ACP_NYD_SNOW_POSITION'				=> 'Emplacement occupé par la neige',
	'ACP_NYD_SNOW_HEADER'				=> 'Dans l’entête du forum ou au niveau de l’entête du forum (voir détails ci-dessus)',
	'ACP_NYD_SNOW_BACKGROUND'			=> 'Arrière-plan du forum ou toute la page (voir détails ci-dessus)',
	'ACP_NYD_INTERACTION_SNOW'			=> 'Chute moyenne, flocons blancs étoilés de différentes tailles | Emplacements = Entête : dans l’entête - Page : en arrière-plan, arrière-plan gris clair',
	'ACP_NYD_SNOWFALL_1'				=> 'Petite chute, petits flocons blancs | Emplacements = Entête : dans l’entête - Page : toute la page',
	'ACP_NYD_SNOWFALL_2'				=> 'Chute moyenne, petits flocons blancs avec ombre portée | Emplacements =  Entête : à son niveau, toute la largeur du forum - Page : toute la page',
	'ACP_NYD_SNOWFALL_3'				=> 'Chute moyenne, flocons arrondis & blancs de différentes tailles | Emplacements = Entête : à son niveau, toute la largeur du forum - Page : toute la page',
	'ACP_NYD_SNOWFALL_4'				=> 'Chute moyenne, flocons arrondis & blancs avec ombre portée de différentes tailles | Emplacements = Entête : à son niveau, toute la largeur du forum - Page : toute la page',
	'ACP_NYD_SNOWFALL_5'				=> 'Chute moyenne, grands flocons blancs étoilés de différentes tailles | Emplacements = Entête : à son niveau, toute la largeur du forum - Page : toute la page',
	'ACP_NYD_PARALLAX_SNOW'				=> 'Chute moyenne & verticale, flocons arrondis & blancs de différentes tailles | Emplacements = Entête : dans l’entête, arrière-plan gris foncé - Page : en arrière-plan, arrière-plan gris foncé',
	'ACP_NYD_MELTING_SNOW'				=> 'Fondante, petits flocons blancs | Emplacements =  Entête : à son niveau, toute la largeur du forum - Page : au niveau de l’entête, toute la largeur du forum',
	'ACP_NYD_INTERACTIVE_SNOW'			=> 'Chute moyenne, interactive avec la souris pour modifier leur direction, flocons arrondis & transparents de différentes tailles | Emplacements = Entête : dans l’entête, arrière-plan en dégradé bleu - Page : en arrière-plan, arrière-plan en dégradé bleu',
	'ACP_NYD_IMAGE_SNOW'				=> 'Chute moyenne, interactive avec la souris pour modifier leur direction, grands flocons complexes bleus & gris | Emplacements = Entête : à son niveau, toute la largeur du forum - Page : toute la page',
	'ACP_NYD_SNOWSTORM'					=> 'Tempête, interactive avec la souris pour modifier leur direction, petits flocons blancs | Emplacements = Entête : dans l’entête, neige qui se dépose sur la barre de navigation (navbar) - Page : toute la page',
	//
	'ACP_NYD_GARLAND_TYPE'				=> 'Type de guirlande',
	'ACP_NYD_FLASHING_GARLAND'			=> 'Guirlande de boules de Noël & d’ampoules clignotantes/statiques (bouton coin supérieur droit), interactive avec la souris pour faire tourner les boules bleues',
	'ACP_NYD_NEW_YEAR_MOTNYA'			=> 'Guirlande de boules de Noël illuminées, interactive avec la souris pour les faire se balancer',
	'ACP_NYD_SMATHABLE_LIGHTS'			=> 'Guirlande d’ampoules clignotantes & multicolores, interactive avec la souris pour briser les ampoules',
	'ACP_NYD_GARLAND_1'					=> 'Guirlande de petites ampoules clignotantes & multicolores',
	'ACP_NYD_GARLAND_2'					=> 'Guirlande de petites ampoules clignotantes & multicolores, telle une liane ondulée',
	'ACP_NYD_GARLAND_3'					=> 'Guirlande de petites ampoules clignotantes & multicolores, type « Clip art » ou dessinée',
	'ACP_NYD_GARLAND_4'					=> 'Guirlande de petites ampoules clignotantes & multicolores, telle une liane ondulée, ampoules disposées en quinconce',
	'ACP_NYD_GARLAND_5'					=> 'Guirlande de petites ampoules clignotantes & multicolores telles des pierres précieuses, sur structure métallique & ondulée',
	'ACP_NYD_GARLAND_6'					=> 'Guirlande de petites ampoules clignotantes & multicolores, telles des pommes suspendues',
	'ACP_NYD_GARLAND_7'					=> 'Guirlande de boules bleue de Noël, étoiles & rubans argentés montés sur des rameaux de sapin',
	//
	'ACP_NYD_IMAGE_TYPE'				=> 'Type de branche d’arbre',
	'ACP_NYD_IMAGE_1'					=> 'Branche de sapin tombante composée de boules de Noël, étoiles, nœuds et rubans argentés & dorés | Emplacement : coin supérieur gauche',
	'ACP_NYD_IMAGE_2'					=> 'Branches de sapin en opposition composée de boules de Noël rouges de différentes tailles | Emplacement : coin supérieur gauche',
	'ACP_NYD_IMAGE_3'					=> 'Branche de sapin horizontale composée d’arbres, boules, cloches, confiseries, étoiles, nœuds de Noël argentés & dorés | Emplacement : coin supérieur gauche, en léger retrait avec le bord',
	'ACP_NYD_IMAGE_4'					=> 'Petit rameau de sapin composé de boules & rubans de Noël dorées | Emplacement : coin supérieur gauche',
	'ACP_NYD_IMAGE_5'					=> 'Branche de sapin montante composée de boules de Noël dorées et rouges | Emplacement : coin supérieur gauche',
	'ACP_NYD_IMAGE_6'					=> 'Branche de sapin montante composée de boules de Noël dorées et rouges | Emplacement : coin supérieur droit',
));
