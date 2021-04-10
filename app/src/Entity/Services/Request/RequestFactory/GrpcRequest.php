<?php

namespace App\Entity\Services\Request\RequestFactory;


use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\Response\ResponseFactory;
use App\Entity\Services\Request\RequestInterface;
use http\Client;
use Symfony\Component\HttpFoundation\Request;

class GrpcRequest extends Request implements RequestInterface
{
    private $response;

    public function getEndPoint()
    {
        // TODO: Implement getEndPoint() method.
    }

    public function send(array $request = []): GrpcRequest
    {
        $client = new Client();
        $client->request(
            'GET',
            'urlToGrpcMicroService'
        );
        $this->response = $client->getResponse();
        return $this;
    }

    public function response(): ResponseInterface
    {
        $response = ResponseFactory::createGrpcResponse();
        $response->setSettings($this->response);
        return $response;
    }
}