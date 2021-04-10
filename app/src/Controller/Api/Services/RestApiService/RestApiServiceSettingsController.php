<?php


namespace App\Controller\Api\Services\RestApiService;



use App\Controller\Api\Base\BaseApiController;
use App\Entity\Services\Request\RequestFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RestApiServiceSettingsController extends BaseApiController
{
    public function getSettings(): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createRestApiRequest();
        $settings = $httpServiceRequest->send()->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

    public function setSettings(Request $request): JsonResponse
    {
        $httpServiceRequest = RequestFactory::createRestApiRequest();
        $settings = $httpServiceRequest->send($request->request->get('fields'))->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }
}