<?php

namespace App\Tests;

use App\Test\TestCase;

/**
 * Class CurrencyControllerTest
 * @package App\Tests
 */
class CurrencyControllerTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function testFirstDayEUR()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'EUR',
                    'date' => 1
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 8.484);
    }

    /**
     * @inheritdoc
     */
    public function testFirstDayUSD()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'USD',
                    'date' => 1
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 7.032);
    }

    /**
     * @inheritdoc
     */
    public function testFirstDayGBP()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'GBP',
                    'date' => 1
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 9.294);
    }

    /**
     * @inheritdoc
     */
    public function testTwoDayEUR()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'EUR',
                    'date' => 2
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 8.53);
    }

    /**
     * @inheritdoc
     */
    public function testTwoDayUSD()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'USD',
                    'date' => 2
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 7.272);
    }

    /**
     * @inheritdoc
     */
    public function testTwoDayGBP()
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $res = $this->client->request(
            'POST',
            'api/conversion',
            [
                'headers' => $headers,
                'form_params' => [
                    'amount' => 2,
                    'currency' => 'GBP',
                    'date' => 2
                ]
            ]);

        $amount = json_decode($res->getBody(), 1);
        $this->assertEquals(200, $res->getStatusCode());
        $this->assertEquals($amount, 9.554);
    }
}
