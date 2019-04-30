<?php
/**
 * Elgg Market Plugin
 * @package market
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author slyhne, RiverVanRain, Rohit Gupta
 * @copyright slyhne 2010-2015, wZm 2017
 * @link https://wzm.me
 * @version 3.0
 */
$filter_context = elgg_extract('filter_context', $vars);

$tabs = [
	'all' => 'market/all',
	'buy' => 'market/all/buy',
	'sell' => 'market/all/sell',
	'swap' => 'market/all/swap',
	'free' => 'market/all/free',
];

if (elgg_is_logged_in()) {
	$user = elgg_get_logged_in_user_entity();
	$tabs['mine'] = "market/owner/$user->username";
}

foreach ($tabs as $tab => $url) {
	elgg_register_menu_item('filter', [
		'name' => $tab,
		'text' => elgg_echo("market:type:$tab"),
		'href' => $url,
		'selected' => $tab == $filter_context,
	]);
}

echo elgg_view_menu('filter', [
	'sort_by' => 'priority',
]);
