<?php

namespace Application\BookezpBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/');

        $this->assertFalse($crawler->filter('html:contains("eZ Publish 4")')->isEmpty());
    }
}
