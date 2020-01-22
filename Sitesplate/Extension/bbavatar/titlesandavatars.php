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
    'BBAVATARS_PARTECIPANTS'	=> 'Themen Mitwirkende',
	'PARTICIPATE_OTHERS'	    => 'Alle Mitwirkende anzeigen',
));
