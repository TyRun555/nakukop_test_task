<?php
namespace App\RemoteServices\Request;


use App\RemoteServices\Response\ResponseInterface;

interface RequestInterface {
    public function getEndPoint();
    public function send();
    public function getResponse(): ResponseInterface;
}