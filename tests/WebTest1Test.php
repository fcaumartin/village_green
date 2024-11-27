<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WebTest1Test extends WebTestCase
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

        // $this->assertSelectorTextContains('h1', 'Village Green');
    }


    public function testAccueil2(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        
        $this->assertResponseIsSuccessful();

        $crawler = $crawler->filter('.nav-item')->last()->children();

        $this->assertEquals($crawler->text(), "Se connecter");

        // $this->assertSelectorTextContains('h1', 'Village Green');
    }

    public function testCategories(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        
        $this->assertResponseIsSuccessful();
        
        $crawler = $client->clickLink('Guitares & Basses');
        
        $this->assertResponseIsSuccessful();

        $crawler = $crawler->filter('body .col-sm-6');
        // dd($crawler);

        $this->assertEquals($crawler->count(), 5);

        // $this->assertSelectorTextContains('h1', 'Village Green');
    }


}
