<?php

require_once __DIR__.'/Request.php';
require_once __DIR__.'/Kernel.php';

$request = Request::createFromGlobals();

var_dump($request);
