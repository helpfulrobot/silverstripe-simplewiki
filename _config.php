<?php

define('SIMPLEWIKI_DIR', dirname(__FILE__));

Director::addRules(100, array(
	'ssimplewiki/$Action' => 'WikiPage_Controller'
));

HtmlEditorConfig::get('default')->enablePlugins('sslinks');
HtmlEditorConfig::get('default')->insertButtonsBefore('advcode', 'ss_simplelink', 'unlink', 'ss_simpleimage');

// PERMISSION CONSTANTS
// To use these permissions, you MUST grant your wiki editor group the ability
// to  View draft content as well as the edit wiki pages. 
define('EDIT_WIKI', 'EDIT_WIKI');
define('MANAGE_WIKI_PAGES', 'MANAGE_WIKI_PAGES');

// Registration of wiki formatters
WikiPage::register_formatter(new MarkdownFormatter());
WikiPage::register_formatter(new HTMLFormatter());
WikiPage::register_formatter(new WikiFormatter());
WikiPage::register_formatter(new PlainFormatter());

// Example configuration options below
/*
WikiPage::$show_edit_button = true; // | false - whether public users get an edit link when viewing a wikipage
WikiPage::$auto_publish = true; // | false - whether pages are automatically published when saved/created
*/

