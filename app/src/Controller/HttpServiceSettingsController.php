<?php


namespace App\Controller;


use App\RemoteServices\ServiceSettings\ServiceSettingsFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpServiceSettingsController extends AbstractController
{
    public function settingsAction(Request $request, Api\Services\HttpService\HttpServiceSettingsController $httpServiceApi): Response
    {
        if ($request->isMethod('POST')) {
            $settings = ServiceSettingsFactory::createHttpSettings();
            $settings->setFields($request->request->get('fields'));
            $settings = $settings->getFields();
        } else {
            $settings = json_decode($httpServiceApi->getSettings()->getContent(), true);
        }

        return $this->render('@service/http.html.twig', compact('settings'));
    }
}