<?php


namespace App\Entity\Services\Request;


use App\Entity\Services\Request\RequestFactory\GrpcRequest;
use App\Entity\Services\Request\RequestFactory\HttpRequest;
use App\Entity\Services\Request\RequestFactory\RestApiRequest;

class RequestFactory
{
    public static function createHttpRequest(): HttpRequest
    {
        return new HttpRequest();
    }

    public static function createRestApiRequest(): RestApiRequest
    {
        return new RestApiRequest();
    }

    public static function createGrpcRequest(): GrpcRequest
    {
        return new GrpcRequest();
    }
}