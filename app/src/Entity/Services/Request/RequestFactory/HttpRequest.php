<?php


namespace App\Entity\Services\Request\RequestFactory;


use App\Entity\Services\Response\ResponseFactory;
use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\Request\RequestInterface;
use Symfony\Component\HttpClient\Exception\TransportException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class HttpRequest implements RequestInterface
{

    /**
     * @var \Symfony\Contracts\HttpClient\ResponseInterface
     */
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