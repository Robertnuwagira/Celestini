<?php
/**
 * Created by PhpStorm.
 * User: RObert
 * Date: 1/12/2016
 * Time: 2:30 PM
 */

require 'vendor/autoload.php';

use Parse\ParseObject;

$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "bar");
$testObject->save();
