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
    'BBAVATARS_PARTECIPANTS'	=> 'Thema Mitwirkende',
	'PARTICIPATE_OTHERS'	    => 'Alle Mitwirkenden anzeigen',
));

