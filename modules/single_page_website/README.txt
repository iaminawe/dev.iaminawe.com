
-- SUMMARY --

This module provide the ability to display the content of all menu items of the menu that you indicate in settings on the Single Page.
On the page '/single_page' the links in the menu will be replaced to the links to the correspondent anchors.
You can set URL '/single_page' as front page of your site, and your visitors will see the Single Page Website managed by Drupal 7.

-- REQUIREMENTS --

Module works with Bartik and Zen themes and sub-themes ONLY!

-- INSTALLATION --

Normal Drupal module installation, see http://drupal.org/node/70151 for further information.
Also you should download phpQuery library 
http://code.google.com/p/phpquery/downloads/list
and put it into sites/all/libraries/phpQuery/phpQuery-onefile.php

Also to allow sopport of changing hashes (#) in the browser address line,
you should install jquery.autoanchor library,
please download it from 
http://plugins.jquery.com/files/jquery.autoanchor.js.txt
save file to the sites/all/libraries/jquery.autoanchor/jquery.autoanchor.js
This is optional function.

-- CONFIGURATION --

* Go to Configure / System / Single Page Settings.

-- CUSTOMIZATION --

You can change HTML DOM IDs in js/*.inc files to customize module setting to your specific html layout.

-- ROADMAP --

To expand the list of the supported themes.

-- CONTACT --

Current maintainers:
* Vasily Yaremchuk (Yaremchuk) - http://drupal.org/user/576918

