<?php

namespace App\Test;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class TestCase
 * @package App\Test
 */
abstract class TestCase extends KernelTestCase
{
    /**
     * @var \GuzzleHttp\Client
     */
    public $client;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $kernel = self::bootKernel();

        $this->client = new \GuzzleHttp\Client(
            ['base_uri' => 'http://localhost:8080/']
        );

    }
}