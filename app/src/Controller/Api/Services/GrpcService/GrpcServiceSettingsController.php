<?php


namespace App\Controller\Api\Services\GrpcService;



use App\Controller\Api\Base\BaseApiController;
use App\Entity\Services\Request\RequestFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GrpcServiceSettingsController extends BaseApiController
{
    public function getSettings(Request $request): Response
    {
        $grpcRequest = RequestFactory::createGrpcRequest();
        $grpcRequest->send();
        return new Response('');
    }
}