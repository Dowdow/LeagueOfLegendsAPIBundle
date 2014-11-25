<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Champion;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Container;

class ChampionService {

    /**
     * @var Caller
     */
    private $caller;

    /**
     * @var Container
     */
    private $container;

    /**
     * Constructor
     * @param Caller $caller
     * @param Container $container
     */
    public function __construct(Caller $caller, Container $container) {
        $this->caller = $caller;
        $this->container = $container;
    }

    /**
     * Retrieves all the champions
     *
     * @param $region string
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     * @return array
     */
    public function getChampions($region) {
        $request = $this->container->getParameter('roots')['champion']['champions'];
        $champions = $this->caller->send($request, $region);
        return $this->createChampions($champions->champions);
    }

    /**
     * Retrieves one champion
     *
     * @param integer $id the id of the champion
     * @param $region string
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     * @return \Dowdow\LeagueOfLegendsAPIBundle\Entity\Champion
     */
    public function  getChampionById($id, $region) {
        if(!is_int($id)) {
            throw new InvalidArgumentException('The "id" must be an int');
        }
        $request = $this->container->getParameter('roots')['champion']['championById'];
        $request = str_replace('{id}', $id, $request);
        $champion = $this->caller->send($request, $region);
        return $this->createChampion($champion);
    }

    /**
     * Create an array of champions
     *
     * @param array $champions an array of json object chamions
     * @return array
     */
    private function createChampions($champions) {
        $return = array();
        foreach($champions as $champion) {
            $return[] = $this->createChampion($champion);
        }
        return $return;
    }

    /**
     * Create a champion
     *
     * @param $object \stdClass
     * @return Champion
     */
    private function createChampion($object) {
        $champion = new Champion();
        $champion->setActive($object->active);
        $champion->setBotEnabled($object->botEnabled);
        $champion->setBotMmEnabled($object->botMmEnabled);
        $champion->setFreeToPlay($object->freeToPlay);
        $champion->setId($object->id);
        $champion->setRankedPlayEnabled($object->rankedPlayEnabled);
        return $champion;
    }

} 