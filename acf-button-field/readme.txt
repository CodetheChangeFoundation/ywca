=== Advanced Custom Fields: Button Field ===
Contributors: webdevmattcrom
Donate link: http://mattcromwell.com
Tags: custom fields, acf, add on
Requires at least: 3.4
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generates a nice button/link to an external url or an internal post type, similar to the page_link field but allows you to override the link text.

== Description ==

NOTE: **This is an extension for the popular [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) plugin. By itself, this plugin does NOTHING.** ENDNOTE

Generates a nice button/link to an external url or an internal post type, similar to the page_link field but allows you to override the link text.

What makes this great is reducing two ACF rows into just one (see screenshots for a clear visual walkthrough). The internal link also uses a dropdown which is populated from all your post types so the button can link to a media file or a Custom Post Type, or of course to a page or post.

NOTE: (*I know it was already mentioned, but just to be sure there's no confusion...*) **This is an extension for the popular [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) plugin. By itself, this plugin does NOTHING.** ENDNOTE

= Future Plans =
Not much really. Probably just a couple things as the need arises:

* Add a filter for media types since the dropdown can get kinda totally out of control.
* Add a target field as well. This would allow for _blank and even "[foobox](http://fooplugins.com/plugins/foobox)" to be targeted.
* Add a checkbox to enable "rel=nofollow".

== Installation ==

This add-on can be treated as both a WP plugin and a theme include.

= Plugin =
1. Copy the 'acf-button' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

= Theme Include =
1.	Copy the 'acf-button' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-button.php file)

`
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-button/acf-button.php');
}
`
== Frequently Asked Questions ==

= Why doesn't my link look like a button? =
I figure if you are using ACF then you're probably pretty comfortable styling this however you like.

= Can I contribute? =
I'd LOVE that!  Development of this happens over [here](https://github.com/mathetos/acf-button-field).

= When are you going to implement those "Future plans"? =
As the need arises per client requests. Meaning: Don't hold your breath. Of course, if you want to contribute to those future plans, see previous FAQ.

== Screenshots ==

1. You see, just to output a simple link without the magic ACF } Button Field you need these whole TWO rows
2. But with the magic ACF } Button Field, you just need this one.
3. Again. What client wants to deal with this stuff!?
4. Now this! This is what I'm talking about. 
5. But what if I just want to link to google.com? Switch it up! There you go, link to whatever the hell you want.

== Changelog ==

Forked from: https://github.com/envex/acf-button-field

The original didn't seem to be updated or maintained, and I needed this for a client, so this is the fork. 

Here's a quick list of the updates made:

= 1.0 =

* Removed all ACF 3 code (really no need for that)
* Fixed bug with $button = $field['value'];
* Added class names to button output for unique styling. Class names automatically output based on Field label.

== Upgrade Notice ==

= 1.0 =
* Initial release.