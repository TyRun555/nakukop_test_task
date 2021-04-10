<?php


namespace App\Controller\Api\Services\RestApiService;



use App\Controller\Api\Base\BaseApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RestApiServiceSettingsController extends BaseApiController
{
    public function getSettings(Request $request): Response
    {
        return new Response('');
    }
}