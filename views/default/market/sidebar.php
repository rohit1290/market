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
$categories = string_to_tag_array(elgg_get_plugin_setting('market_categories', 'market'));

if (!empty($categories)) {
	echo elgg_view_module('info', elgg_echo('market:categories'), elgg_view('market/categories'));
}

echo elgg_view('page/elements/comments_block', [
	'subtypes' => \ElggMarket::SUBTYPE,
	'container_guid' => elgg_get_page_owner_guid(),
]);

echo elgg_view('page/elements/tagcloud_block', [
	'subtypes' => \ElggMarket::SUBTYPE,
	'container_guid' => elgg_get_page_owner_guid(),
]);
