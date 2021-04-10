<?php


namespace App\Controller\Api\Services\HttpService;



use App\Controller\Api\Base\BaseApiController;
use App\Entity\Services\Request\RequestFactory;
use App\Entity\Services\Request\RequestFactory\HttpRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpServiceSettingsController extends BaseApiController
{

    public function getSettings(Request $request): Response
    {
        $httpServiceRequest = RequestFactory::createHttpRequest();
        $settings = $httpServiceRequest->send()->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

    public function setSettings(Request $request)
    {
        $httpServiceRequest = RequestFactory::createHttpRequest();
        $settings = $httpServiceRequest->send($request->getContent())->getResponse();
        return $this->json($settings->getSettings()->getFields());
    }

    public function settingsAction(Request $request)
    {
        $settings = json_decode($this->getSettings($request), true);
        return $this->render('@service/http.html.twig', compact('settings'));
    }

}