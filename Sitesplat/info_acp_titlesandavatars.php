<?php
/**
*
* BBAvatars
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
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
	'TAT'						=> 'BBAvatars',
	'TAT_SHOW_AVATARS'			=> 'Zeige Avatare in der Forumliste',
	'TAT_SHOW_AVATARS_EXPLAIN'	=> 'Zeige Avatar vom letzten, ersten oder beiden Poster',
	'TAT_SHOW_AVATARS_ML'		=> 'Zeige Avatare in Mitgliederliste',
	'TAT_SHOW_AVATARS_PP'		=> 'Zeige Mitwirkende Avatare in Thema',
	'TAT_SHOW_AVATARS_OL'		=> 'Zeige Avatare in der Online-Liste',

	'TAT_BOTH'					=> 'Zeige beide Avatare',
	'TAT_FIRST'					=> 'Nur erstes Avatar anzeigen',
	'TAT_LAST'					=> 'Nur letztes Avatar anzeigen',
	
	'TAT_AVATAR_FIRST'			=> 'Erstes Avatar:',
	'TAT_AVATAR_LAST'			=> 'letztes Avatar:',
	
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore existiert nicht! <br /> Laden Sie das <a href="https://sitesplat.com" target="_blank">BBcore</a> herunter und kopieren Sie den BBcore-Ordner in Ihren SiteSplat-Erweiterungsordner.',
	'BBAVATARS_NOTICE'	            => '<div class="phpinfo"><p>Die Einstellungen fÃ¼r diese Erweiterung sind in <strong>%1$s &#187; %2$s &#187; %3$s.</strong></p></div>',

));

