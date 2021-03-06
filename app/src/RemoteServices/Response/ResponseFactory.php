<?php


namespace App\RemoteServices\Response;


use App\RemoteServices\Response\ResponseFactory\GrpcResponse;

use App\RemoteServices\Response\ResponseFactory\RestApiResponse;
use App\RemoteServices\Response\ResponseFactory\HttpResponse;

class ResponseFactory
{

    /**
     * Create response object for http-only service
     * @return HttpResponse
     */
    public static function createHttpResponse(): HttpResponse
    {
        return new HttpResponse();
    }

    /**
     * Create response object for REST API service
     * @return RestApiResponse
     */
    public static function createRestApiResponse(): RestApiResponse
    {
        return new RestApiResponse();
    }

    /**
     * Create response object for gRPC service
     * @return GrpcResponse
     */
    public static function createGrpcResponse(): GrpcResponse
    {
        return new GrpcResponse();
    }
}