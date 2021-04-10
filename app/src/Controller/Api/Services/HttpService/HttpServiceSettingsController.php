<?php


namespace App\Controller\Api\Services\HttpService;



use App\Controller\Api\Base\BaseApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpServiceSettingsController extends BaseApiController
{

    public function getSettings(Request $request): Response
    {
        return new Response('');
    }

}