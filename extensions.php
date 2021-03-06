<?php

# ParserFunctions
# https://www.mediawiki.org/wiki/Extension:ParserFunctions
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );

# ConfirmEdit
# https://www.mediawiki.org/wiki/Extension:ConfirmEdit
require("$IP/extensions/ConfirmEdit/ConfirmEdit.php");
require_once("$IP/extensions/ConfirmEdit/Asirra.php");
$wgCaptchaClass = 'Asirra';
$wgGroupPermissions['user']['skipcaptcha'] = false;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;

# WikiEditor
# https://www.mediawiki.org/wiki/Extension:WikiEditor
require("$IP/extensions/WikiEditor/WikiEditor.php");

# SyntaxHighlight_GeSHi
# https://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# Vector
# https://www.mediawiki.org/wiki/Extension:Vector
require_once("$IP/extensions/Vector/Vector.php");

# PostEdit
# https://www.mediawiki.org/wiki/Extension:PostEdit
require_once("$IP/extensions/PostEdit/PostEdit.php");

# intersection
# https://www.mediawiki.org/wiki/Extension:intersection
require_once("$IP/extensions/intersection/DynamicPageList.php");

# Nuke
# https://www.mediawiki.org/wiki/Extension:Nuke
require_once("$IP/extensions/Nuke/Nuke.php");

# Babel
# https://www.mediawiki.org/wiki/Extension:Babel
require_once("$IP/extensions/Babel/Babel.php");

# Math
# https://www.mediawiki.org/wiki/Extension:Math
require_once("$IP/extensions/Math/Math.php");

# Gadgets
# https://www.mediawiki.org/wiki/Extension:Gadgets
require_once("$IP/extensions/Gadgets/Gadgets.php");

# Interwiki
# https://www.mediawiki.org/wiki/Extension:Interwiki
require_once("$IP/extensions/Interwiki/Interwiki.php");
$wgGroupPermissions['sysop']['interwiki'] = true;
