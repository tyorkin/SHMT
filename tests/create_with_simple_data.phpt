--TEST--
SHMT: Test SHMT::create() method with simple data array
--FILE--
<?php
$sTmpFile = tempnam(sys_get_temp_dir(), 'shmt_');

$aData = ['foo' => 'bar', 'bar' => 'baz', 666 => 'evil', 'evil' => 666];

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

var_dump(SHMT::create($sTmpFile, $aData));
var_dump(file_exists($sTmpFile));
var_dump(filesize($sTmpFile) > 50);

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

unlink($sTmpFile);
?>
===DONE===
--EXPECT--
bool(true)
bool(true)
bool(true)
===DONE===
