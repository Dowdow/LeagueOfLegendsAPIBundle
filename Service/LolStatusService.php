<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Entity\Incident;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Locale;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Message;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Service;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Shard;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Translation;
use GuzzleHttp\Client;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class LolStatusService {

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
     * Get all Shards
     * @return array
     */
    public function getShards() {
        $request = $this->container->getParameter('roots')['lol-status']['shards'];
        $response = $this->guzzle->get($request);

        switch($response->getStatusCode()) {
            case 403:
                throw new AccessDeniedHttpException();
                break;
            case 429:
                throw new TooManyRequestsHttpException();
                break;
        }

        return $this->createShards(json_decode($response->getBody()));
    }

    /**
     * Get Shards by region
     * @param $region
     * @return Shard
     */
    public function getShardsByRegion($region) {
        $request = $this->container->getParameter('roots')['lol-status']['shardsByRegion'];
        $request = str_replace('{region}',$region,$request);
        $response = $this->guzzle->get($request);

        switch($response->getStatusCode()) {
            case 403:
                throw new AccessDeniedHttpException();
                break;
            case 429:
                throw new TooManyRequestsHttpException();
                break;
        }

        return $this->createShard(json_decode($response->getBody()));
    }

    /**
     * Create Shards array
     * @param $object
     * @return array
     */
    private function createShards($object) {
        $shards = array();
        foreach($object as $shard) {
            $shards[] = $this->createShard($shard);
        }
        return $shards;
    }

    /**
     * Create Shards object
     * @param $object
     * @return Shard
     */
    private function createShard($object) {
        $shard = new Shard();
        $shard->setSlug($object->slug);
        $shard->setHostname($object->hostname);
        $shard->setName($object->name);
        $shard->setRegionTag($object->region_tag);
        if(isset($object->locales)) {
            foreach($object->locales as $locale) {
                $shard->addLocale($this->createLocale($locale));
            }
        }
        if(isset($object->services)) {
            foreach($object->services as $service) {
                $shard->addService($this->createService($service));
            }
        }
        return $shard;
    }

    /**
     * Create Locale object
     * @param $object
     * @return Locale
     */
    private function createLocale($object) {
        $locale = new Locale();
        $locale->setLocale($object);
        return $locale;
    }

    /**
     * Create Service object
     * @param $object
     * @return Service
     */
    private function createService($object) {
        $service = new Service();
        $service->setName($object->name);
        $service->setSlug($object->slug);
        $service->setStatus($object->status);
        if(isset($object->incidents)) {
            foreach($object->incidents as $incident) {
                $service->addIncident($this->createIncident($incident));
            }
        }
        return $service;
    }

    /**
     * Create Incident object
     * @param $object
     * @return Incident
     */
    private function createIncident($object) {
        $incident = new Incident();
        $incident->setId($object->id);
        $incident->setActive($object->active);
        $incident->setCreatedAt($object->created_at);
        if(isset($object->updates)) {
            foreach($object->updates as $message) {
                $incident->addMessage($this->createMessage($message));
            }
        }
        return $incident;
    }

    /**
     * Create Message object
     * @param $object
     * @return Message
     */
    private function createMessage($object) {
        $message = new Message();
        $message->setId($object->id);
        $message->setCreatedAt($object->created_at);
        $message->setAuthor($object->author);
        $message->setContent($object->content);
        $message->setSeverity($object->severity);
        $message->setUpdatedAt($object->updated_at);
        if(isset($object->translations)) {
            foreach($object->translations as $translation) {
                $message->addTranslation($this->createTranslation($translation));
            }
        }
        return $message;
    }

    /**
     * Create Translation object
     * @param $object
     * @return Translation
     */
    private function createTranslation($object) {
        $translation = new Translation();
        $translation->setContent($object->content);
        $translation->setLocale($object->locale);
        $translation->setUpdatedAt($object->updated_at);
        return $translation;
    }

} 