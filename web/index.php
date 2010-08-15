<?php

require_once __DIR__.'/../bookezp/bookezpKernel.php';

$kernel = new bookezpKernel('prod', false);
$kernel->handle()->send();
