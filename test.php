<?php
use VoidInsight\PHPSIP\Structure\Tokens\Version;
require_once "vendor/autoload.php";
$o = new Version(2,0);
var_dump(serialize($o));