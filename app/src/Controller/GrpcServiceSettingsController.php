<?php


namespace App\Controller;


use App\RemoteServices\ServiceSettings\ServiceSettingsFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GrpcServiceSettingsController extends AbstractController
{
    public function settingsAction(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $settings = ServiceSettingsFactory::createGrpcSettings();
            $settings->setFields($request->request->get('fields'));
            $settings = $settings->getFields();
        } else {
            $gRpcServiceApi = $this->get('GrpcServiceApi');
            $settings = json_decode($gRpcServiceApi->getSettings()->getContent(), true);
        }

        return $this->render('@service/http.html.twig', compact('settings'));
    }
}