<?php
namespace App\RemoteServices\Request\RequestFactory;


use App\RemoteServices\Response\ResponseFactory;
use App\RemoteServices\Response\ResponseInterface;
use App\RemoteServices\Request\RequestInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class HttpRequest implements RequestInterface
{

    /**
     * @var \Symfony\Contracts\HttpClient\ResponseInterface
     */
    private \Symfony\Contracts\HttpClient\ResponseInterface $response;

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
        try {
            $response = json_decode($this->response->getContent(), true);
            $httpResponse = ResponseFactory::createHttpResponse();
            $httpResponse->setSettings($response);
        } catch (\Throwable $e) {
            return ResponseFactory::createHttpResponse();
        }

        return $response;
    }
}