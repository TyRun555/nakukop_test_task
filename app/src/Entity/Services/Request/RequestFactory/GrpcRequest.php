<?php

namespace App\Entity\Services\Request\RequestFactory;


use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\Response\ResponseFactory;
use App\Entity\Services\Request\RequestInterface;
use http\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class GrpcRequest extends Request implements RequestInterface
{
    private $response;

    public function getEndPoint(): string
    {
        return 'urlToTheService';
    }

    public function send(array $request = []): RequestInterface
    {
        $client = HttpClient::create();
        try {
            $response = $client->request(
                'GET',
                $this->getEndPoint()
            );
            $this->response = $response;

        } catch (TransportExceptionInterface $e) {
            //TODO handle exception
        }
        return $this;
    }

    public function getResponse(): ResponseInterface
    {
        $response = ResponseFactory::createGrpcResponse();
        $response->setSettings($this->response);
        return $response;
    }
}