=== Plugin Stats View ===
Contributors: Katsushi Kawamori
Donate link: https://shop.riverforest-wp.info/donate/
Tags:  block, Plugins, plugins, Stats, stats
Requires at least: 4.7
Requires PHP: 8.0
Tested up to: 6.6
Stable tag: 3.06
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The stats of plugin is displayed by block or shortcode.

== Description ==

The stats of plugin is displayed by block or shortcode.

* Sibling plugin -> [Theme Stats View](https://wordpress.org/plugins/theme-stats-view/).

= How it works =
[youtube https://youtu.be/Krbsm8GxSQY]

== Installation ==

1. Upload `plugin-stats-view` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

How to use

= Shortcode =

Please add new Page. Please write a short code.

Examples for single plugin
[psview slug="plugin-stats-view"]
[psview slug="plugin-stats-view" view="simple" link="https://test.com/%slug%/"]
* slug		Specifies the plugin slug.
* view		View style. Choose normal(Standard display), card(Card display) or simple(Simple display). Default: view="normal"
* link		You can specify the link destination of the plug-in name. If not specified, this is the plugin homepage link. Can insert a slug tag in the URL of the link. Default: link=null Tag: %slug%
* open		Description style for normal view. Select true(View Description) or false(Hide Description). Default: open=false

Examples for multi plugins
[paview slug="plugin-stats-view,media-from-ftp,post-date-time-change"]
[paview slug="plugin-stats-view,media-from-ftp,post-date-time-change" link="https://test.com/%slug%/"]
* slug		Specify the slugs of multiple plugins separated by a comma.
* link		You can specify the link destination of the plug-in name. If not specified, this is the plugin homepage link. Can insert a slug tag in the URL of the link. Default: link=null Tag: %slug%
* totalonly Total graph only. Select true(View Total only) or false(View Full). Default: totalonly=false

= WP-CLI =

Can delete and regenerate the cache with the following WP-CLI command. It would be beneficial to register it with the server's cron.
* `wp psview_refresh`

= Filter hook =
* Can specify your own output html template and its CSS using filter hooks, see the files in the template directory of plugin.

HTML
* `plugin_stats_view_generate_template_html_normal_file`
* `plugin_stats_view_generate_template_html_card_file`
* `plugin_stats_view_generate_template_html_simple_file`
* `plugin_stats_view_generate_template_html_all_file`

CSS
* `plugin_stats_view_css_url`

== Frequently Asked Questions ==

none

== Screenshots ==

1. Screen image for single plugin
2. Mobile screen image for single plugin
3. Block for single plugin
4. Shortcode for single plugin
5. Screen image for multi plugins
6. Block for multi plugins
7. Shortcode for multi plugins
8. Settings

== Changelog ==

= [3.06] 2024/06/10 =
* Fix - Issues with getting site information for WP-CLI.

= [3.05] 2024/06/02 =
* Fix - Issues with getting site information for WP-CLI.
* Added - The user agent for retrieving site information was set to "Plugin Stats View; %url%" for WP-CLI.
* Fix - The number of redirects for site information getting was reduced from 5 to 0 for WP-CLI.

= [3.04] 2024/05/27 =
* Fix - active installs count for multi plugins.
* Fix - Download count for multi plugins.

= [3.03] 2024/05/27 =
* Fix - Removed unnecessary code.

= [3.02] 2024/05/24 =
* Fix - Removed unnecessary code.

= [3.01] 2024/05/23 =
* Fix - Changed small icon size from 80px to 64px.
* Fix - Changed spacing for multiple display types from 320px to 300px.

= [3.00] 2024/05/23 =
* Added - Customization by template files.

= [2.28] 2024/05/18 =
* Added - Uninstall script.

= [2.27] 2024/05/18 =
* Added - WP-CLI command to delete and regenerate caches.

= [2.26] 2024/05/14 =
* Fix - Change in the way css are loaded.
* Added - totalonly attribute.

= 2.25 =
Rebuilt blocks.

= 2.24 =
Removed some unnecessary code.

= 2.23 =
Rebuilt blocks.

= 2.22 =
Supported WordPress 6.4.
PHP 8.0 is now required.

= 2.21 =
Added escaping process.

= 2.20 =
Supported WordPress 6.1.

= 2.19 =
Supported WordPress 6.0.

= 2.18 =
Rebuilt blocks.

= 2.17 =
Supported WordPress 5.6.

= 2.16 =
Fixed an issue with the icon display.

= 2.15 =
Removed some unnecessary code.

= 2.14 =
Added card display.

= 2.13 =
Fixed problem of mobile display.

= 2.12 =
Fixed the format of the displayed numbers.

= 2.11 =
Can insert a slug tag in the URL of the link.
The total number of reviews can be displayed.

= 2.10 =
Added multi plugins view.

= 2.04 =
Change translation.

= 2.03 =
Added the total number of reviews.
Added support for mobile display.
Added CSS for accordion.

= 2.02 =
The method of displaying five stars has been changed.

= 2.01 =
Change icon.

= 2.00 =
Supported block.

= 1.19 =
Supported WordPress 5.3.

= 1.18 =
Conformed to the WordPress coding standard.

= 1.17 =
Fixed problem of downloaded.

= 1.16 =
Removed unnecessary code.

= 1.15 =
Changed jQuery to rateYo from raty.

= 1.14 =
Fixed fine problem.

= 1.13 =
Changed donate link.

= 1.12 =
Fixed problem of Javascript.

= 1.11 =
Fixed problem of Javascript.

= 1.10 =
Fixed problem of Javascript.

= 1.09 =
Remove the unnecessary code.
Fixed problem of ratings.

= 1.08 =
Fixed problem of languages.

= 1.07 =
/languages directory is deleted.

= 1.06 =
Supported GlotPress.

= 1.05 =
Add ratings bar.
Fixed problem of CSS.

= 1.04 =
Add atribute.
Change readme.txt
Fixed problem of CSS.

= 1.03 =
Add atribute of plugins_api().
Change Display.

= 1.02 =
Add the deletion of the cache.
If the plugin is installed on the site, translate short description.

= 1.01 =
Add atribute.
Add management screen.

= 1.00 =

== Upgrade Notice ==

= 1.00 =

