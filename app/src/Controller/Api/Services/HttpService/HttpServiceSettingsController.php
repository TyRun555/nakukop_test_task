<?php


namespace App\Controller\Api\Services\HttpService;



use App\Controller\Api\Base\BaseApiController;
use App\RemoteServices\Request\RequestFactory;
use App\RemoteServices\Request\RequestFactory\HttpRequest;
use App\RemoteServices\ServiceSettings\ServiceSettingsFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\VarDumper;

class HttpServiceSettingsController extends BaseApiController
{

    public function getSettings(): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createHttpRequest();
        $settings = $httpServiceRequest->send()->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

    public function setSettings(Request $request): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createHttpRequest();
        $settings = $httpServiceRequest->send($request->request->get('fields'))->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

}