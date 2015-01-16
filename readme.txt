=== Plugin Name ===
Contributors: marcopetersdij
Tags: meta, box, metabox, meta box, map, location, picker, locationpicker, mappicker
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Meta Box field to use when you need the user to pick a point on an image, like a map.

== Description ==

This Meta Box field will let you create a Meta Box field in the admin to let the user pick a specific point in an image. Useful when you need a specific point on a map.

To use this plugin, you need to have the [Meta Box](https://wordpress.org/plugins/meta-box/ "Meta Box") plugin installed.

Usage:

When creating a new field, 3 Meta Box fields need to be added to the Meta Box. The following is an example of the usage:

`array(
	'name' => 'Place on map',
	'id' => 'map_placement',
	'type' => 'locationpicker',
	'image' => get_template_directory_uri() . '/assets/img/admin/worldmap_admin.png'
),
array(
	'name' => '',
	'id' => 'map_placement_top',
	'type' => 'hidden'
),
array(
	'name' => '',
	'id' => 'map_placement_left',
	'type' => 'hidden'
)`

Values saved in the 'map_placement_top' and 'map_placement_left' fields, are percentages from the top and left side of the image. To show a point on an image on your site, you can use these percentages to place the point. The ID's can be changed, but take note that the second and third ID needs to be the first ID with "_top" and "_left" appended.

= Collaboration =

This plugin has been built in collaboration with [de Internet Jongens](http://deinternetjongens.nl/ "de Internet Jongens")

== Installation ==

1. Upload `meta-box-locationpicker` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Follow the instructions in the description above

== Changelog ==

= 1.1 =
* Changes in readme.txt

= 1.0 =
* Initial version