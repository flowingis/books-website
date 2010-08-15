<?php

require_once __DIR__.'/prophpKernel.php';

use Symfony\Foundation\Cache\Cache;

class prophpCache extends Cache
{
  protected function getOptions()
  {
    return array();
  }
}
