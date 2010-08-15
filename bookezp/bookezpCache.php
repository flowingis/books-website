<?php

require_once __DIR__.'/bookezpKernel.php';

use Symfony\Foundation\Cache\Cache;

class bookezpCache extends Cache
{
  protected function getOptions()
  {
    return array();
  }
}
