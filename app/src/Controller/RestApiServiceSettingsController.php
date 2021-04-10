<?php


namespace App\Controller;


use App\Entity\Services\ServiceSettings\ServiceSettingsFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RestApiServiceSettingsController extends AbstractController
{
    public function settingsAction(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $settings = ServiceSettingsFactory::createRestApiSettings();
            $settings->setFields($request->request->get('fields'));
            $settings = $settings->getFields();
        } else {
            $restApiServiceApi = $this->get('RestApiServiceApi');
            $settings = json_decode($restApiServiceApi->getSettings()->getContent(), true);
        }

        return $this->render('@service/http.html.twig', compact('settings'));
    }
}