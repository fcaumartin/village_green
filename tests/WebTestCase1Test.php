<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WebTestCase1Test extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Village Green');
    }

    public function testAccueil(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        
        $this->assertResponseIsSuccessful();

        $crawler = $crawler->filter('body .col-sm-6');

        $this->assertEquals($crawler->count(), 12);

        // $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
