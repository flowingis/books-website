<?php

require_once __DIR__.'/../prophp/prophpKernel.php';

$kernel = new prophpKernel('prod', false);
$kernel->handle()->send();
