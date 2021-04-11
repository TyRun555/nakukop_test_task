<?php


namespace App\Controller\Api\Services\GrpcService;



use App\Controller\Api\Base\BaseApiController;
use App\RemoteServices\Request\RequestFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GrpcServiceSettingsController extends BaseApiController
{
    public function getSettings(): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createGrpcRequest();
        $settings = $httpServiceRequest->send()->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

    public function setSettings(Request $request): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createGrpcRequest();
        $settings = $httpServiceRequest->send($request->request->get('fields'))->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }
}