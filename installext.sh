#!/bin/sh
echo "Welcome to the extension installer.";
echo "Please enter the name of the extension you wish to install:";
read name
git submodule add https://gerrit.wikimedia.org/r/p/mediawiki/extensions/$name.git
git submodule update
echo "\n# $name\n# https://www.mediawiki.org/wiki/Extension:$name\nrequire_once(\"\$IP/extensions/$name/$name.php\");" >> extensions.php
