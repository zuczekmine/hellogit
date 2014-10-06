<?php

require_once __DIR__.'/Request.php';
require_once __DIR__.'/Kernel.php';
require_once __DIR__.'/HtmlView.php';


$request = Request::createFromGlobals();
$htmlView = new HtmlView();

$kernel = new Kernel($htmlView);
try {
    $kernel->handle($request);
} catch (\Exception $e) {
    echo $e->getMessage();
}

