<?php
namespace App\Entity\Services\Request\Tests;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class isApiAliveTest extends WebTestCase
{
    /**
     * @test HttpService
     */
    public function isHttpServiceReturn200StatusCode()
    {
        $client = $this->createClient();
        $client->request(
            "GET",
            '/api/services/http/settings'
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * @test RestService
     */
    public function isRestApiServiceReturn200StatusCode()
    {
        $client = $this->createClient();
        $client->request(
            "GET",
            '/api/services/restapi/settings'
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * @test gRPCService
     */
    public function isGrpcServiceReturn200StatusCode()
    {
        $client = $this->createClient();
        $client->request(
            "GET",
            '/api/services/grpc/settings'
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}