<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Champion;

class ChampionService {

    /**
     * @var Caller
     */
    private $caller;

    /**
     * Constructor
     * @param Caller $caller
     */
    public function __construct(Caller $caller) {
        $this->caller = $caller;
    }

    /**
     * Retrieves all the champions
     *
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     * @return array
     */
    public function getChampions() {
        $champions = $this->caller->send('https://euw.api.pvp.net/api/lol/euw/v1.2/champion');
        //die(var_dump($champions));
        return $this->createChampions($champions->champions);
    }

    /**
     * Retrieves one champion
     *
     * @param integer $id the id of the champion
     * @return \Dowdow\LeagueOfLegendsAPIBundle\Entity\Champion
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function  getChampionById($id) {
        $champion = $this->caller->send('https://euw.api.pvp.net/api/lol/euw/v1.2/champion/'.$id);
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