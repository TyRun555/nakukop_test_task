<?php


namespace App\RemoteServices\Request;


use App\RemoteServices\Request\RequestFactory\GrpcRequest;
use App\RemoteServices\Request\RequestFactory\HttpRequest;
use App\RemoteServices\Request\RequestFactory\RestApiRequest;

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