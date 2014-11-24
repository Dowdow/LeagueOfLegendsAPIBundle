<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Caller;

use GuzzleHttp\Client;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class Caller {

    /**
     * @var Client
     */
    private $guzzle;

    /**
     * @var Container
     */
    private $container;

    /**
     * Constructor
     * @param Container $container
     */
    public function __construct(Container $container) {
        $this->guzzle = new Client();
        $this->container = $container;
    }

    /**
     * Send a request and return a JSON object response
     * @param $request string
     * @throws InternalErrorException
     * @return mixed json response
     */
    public function send($request) {
        $response = $this->guzzle->get($request, array('query' => array('api_key' => $this->container->getParameter('key'))));

        switch($response->getStatusCode()) {
            case 400:
                throw new BadRequestHttpException();
                break;
            case 401:
                throw new UnauthorizedHttpException('');
                break;
            case 429:
                throw new TooManyRequestsHttpException();
                break;
            case 500:
                throw new InternalErrorException();
                break;
            case 503:
                throw new ServiceUnavailableHttpException();
                break;
        }

        return json_decode($response->getBody());
    }

}