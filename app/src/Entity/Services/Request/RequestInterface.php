<?php
namespace App\Entity\Services\Request;


use App\Entity\Services\Response\ResponseInterface;

interface RequestInterface {
    public function getEndPoint();
    public function send();
    public function getResponse(): ResponseInterface;
}