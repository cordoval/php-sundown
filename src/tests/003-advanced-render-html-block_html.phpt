--TEST--
Check for Sundown\Render\HTML::block_html() feature
--SKIPIF--
<?php if (!extension_loaded("sundown")) print "skip"; ?>
--FILE--
<?php
$render = new Sundown\Render\HTML();
echo $render->block_html("block html") . PHP_EOL;
--EXPECT--
block html