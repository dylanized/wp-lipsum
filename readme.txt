=== Plugin Name ===
Contributors: dylanized (this should be a list of wordpress.org userid's)
Tags: dummy text, lorem ipsum, lipsum
Requires at least: 3.3.2
Tested up to: 3.3.2
Stable tag: 1.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Lipsum is a simple plugin for generating dummy text for your WordPress site.

== Description ==

WP Lipsum includes a collection of template fragments representing lots of common page types, from simple lorem ipsum paragraphs to demos of the WP comment system, and more. It works via shortcode or template tag.

Here's the shortcode:

[lipsum]
This outputs the basic content block. You can edit this in wp-lipsum/templates/basic.php.

[lipsum template=aux]
This outputs the auxilary lipsum page, with tables, definition lists, and more. You can edit this in templates/aux.php.

[lipsum repeat=4]
This outputs 4 simple paragphs of lorem ipsum text. You can edit the text in templates/p.php.

[lipsum template=ol repeat=3]
This loads the ordered list template and displays it 3 times.

[lipsum t=ol r=3]
You can also use “t” and “r” as parameter shortcuts.

Here are the full pages you can call:

Basic Content – “basic”
Aux Content – “aux”
Blog Demo – “blog”
Single Post Demo – “single”
Headline List – “headline_list”
Gallery Demo – “gallery”
Portfolio Demo – “portfolio”
Long Header Examples – “long_headers”
Short Content Demo – “short”
Template Fragments

You can also call these smaller template fragments, and use the “repeat” parameter:

* Single Paragraph – “p”
* Unordered List – “ul”
* Ordered List – “ol”
* Definition List – “dl”
* Table Example – “table”
* Blockquote – “blockquote”
* Blog Teaser – “blog_teaser”
* WP Image Caption Demo – “caption”
* Code Demo – “code”
* Comments Demo – “comments”
* Gallery Item – “gallery_item”
* List of Headers – “headers”
* Headline Teaser – “headline_teaser”
* Misc Content – “misc”
* Portfolio Item – “portfolio_item”

All lipsum template snippets are located in plugins/wp-lipsum/templates. You can easily add new template files in here, and call them with the “template” attribute.

Templates use Bedrock conventions, including class names (like .table-style and .post-nav), using H1s and H2s only for titles, and other concepts.

You can also call the plugin from the template code, by using these template tags:

`<?php display_lipsum_template($template, $repeat); ?>`
`<?php display_lipsum_template(‘basic’) ?>' (this would include the basic.php template)
`<?php display_lipsum_template(‘table’, 4) ?>' ( this would include the table.php fragment and repeat it 4 times)

[WPLipsum](http://bedrocktheme.com/wp-lipsum/ "View the WP-Lipsum homepage here") 

WP-Lipsum is a part of the Bedrock mini-framework, more info at [Bedrock](http://bedrocktheme.com/ "bedrocktheme.com") 


== Installation ==

1. Upload  the "wp-lipsum" folder to the "/wp-content/plugins/" directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Now you can use the shortcodes and the template tag


== Screenshots ==

1. The "basic" template 
2. The "aux" template
3. The "blog" template

== Changelog ==

= 1.3 =
* Added "t" and "r" shortcuts, subitted to WP Directory

= 1.2 =
* Added lots more templates and changed paramters to "template" and "repeat"

= 1.1 = 
* Fixed a bug

= 1.0 =
First version, just had a couple templates

== Upgrade Notice ==

Note: if you create your own custom lipsum templates, make sure to back them up before you upgrade this plugin.