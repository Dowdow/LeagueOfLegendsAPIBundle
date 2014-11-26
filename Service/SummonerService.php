<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Mastery;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\MasteryPage;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Rune;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\RunePage;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Summoner;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Container;

class SummonerService {

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
     * Get Summoners by names
     * @param $names
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getSummonersByNames($names, $region) {
        $request = $this->container->getParameter('roots')['summoner']['summonerObjectsBySummonerNames'];
        $request = str_replace('{summonerNames}', $this->normalizeArray($names), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createSummoners($summoners);
    }

    /**
     * Get Summoners by ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getSummonersByIds($ids, $region) {
        $request = $this->container->getParameter('roots')['summoner']['summonerObjectsBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createSummoners($summoners);
    }

    /**
     * Get Summoners masteries by Summoners ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getSummonersMasteries($ids, $region) {
        $request = $this->container->getParameter('roots')['summoner']['masteryPagesBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createMasteryPages($summoners);
    }

    /**
     * Get Summoners names by summoners ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getSummonersNames($ids, $region) {
        $request = $this->container->getParameter('roots')['summoner']['summonerNamesBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $names = $this->caller->send($request, $region);
        return $this->namesToArray($names);
    }

    /**
     * Get Summoners runes by summoners ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getSummonersRunes($ids, $region) {
        $request = $this->container->getParameter('roots')['summoner']['runePagesBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createRunePages($summoners);
    }

    /**
     * Transform the array in a string
     * @param $array
     * @return string
     */
    private function normalizeArray($array) {
        if(!is_array($array)) {
            throw new InvalidArgumentException('The parameter must be an array');
        }
        if(count($array) < 1 || count($array) > 40) {
            throw new InvalidArgumentException('The parameter array must contain at least between 1 and 40 elements');
        }
        $normalizeArray = '';
        for($i = 0; $i < count($array); $i++) {
            $normalizeArray = strtolower($normalizeArray.$array[$i]);
            if($i < count($array) - 1) {
                $normalizeArray = $normalizeArray.',';
            }
        }
        return $normalizeArray;
    }

    /**
     * Create a Summoner array
     * @param $object
     * @return array
     */
    private function createSummoners($object) {
        $summoners = array();
        foreach($object as $summoner) {
            $summoners[] = $this->createSummoner($summoner);
        }
        return $summoners;
    }

    /**
     * Create a Summoner object
     * @param $object
     * @return Summoner
     */
    private function createSummoner($object) {
        $summoner = new Summoner();
        $summoner->setId($object->id);
        $summoner->setName($object->name);
        $summoner->setProfileIconId($object->profileIconId);
        $summoner->setRevisionDate($object->revisionDate);
        $summoner->setSummonerLevel($object->summonerLevel);
        return $summoner;
    }

    /**
     * Create a Summoner array that contains MasteryPage array
     * @param $object
     * @return array
     */
    private function createMasteryPages($object) {
        $summoners = array();
        foreach($object as $value) {
            $summoner = new Summoner();
            $summoner->setId($value->summonerId);
            foreach($value->pages as $masteryPage) {
                $summoner->addMasteryPage($this->createMasteryPage($masteryPage));
            }
            $summoners[] = $summoner;
        }
        return $summoners;
    }

    /**
     * Create MasteryPage object
     * @param $object
     * @return MasteryPage
     */
    private function createMasteryPage($object) {
        $masteryPage = new MasteryPage();
        $masteryPage->setId($object->id);
        $masteryPage->setCurrent($object->current);
        $masteryPage->setName($object->name);
        if(isset($object->masteries)) {
            foreach($object->masteries as $mastery) {
                $masteryPage->addMastery($this->createMastery($mastery));
            }
        }
        return $masteryPage;
    }

    /**
     * Create a Mastery object
     * @param $object
     * @return Mastery
     */
    private function createMastery($object) {
        $mastery = new Mastery();
        $mastery->setId($object->id);
        $mastery->setRank($object->rank);
        return $mastery;
    }

    /**
     * Create a name array
     * @param $object
     * @return array
     */
    private function namesToArray($object) {
        $names = array();
        foreach($object as $name) {
            $names[] = $name;
        }
        return $names;
    }

    /**
     * Create a Summoner array that contains RunePage array
     * @param $object
     * @return array
     */
    private function createRunePages($object) {
        $summoners = array();
        foreach($object as $value) {
            $summoner = new Summoner();
            $summoner->setId($value->summonerId);
            foreach($value->pages as $runePage) {
                $summoner->addRunesPage($this->createRunePage($runePage));
            }
            $summoners[] = $summoner;
        }
        return $summoners;
    }

    /**
     * Create a RunePage object
     * @param $object
     * @return RunePage
     */
    private function createRunePage($object) {
        $runePage = new RunePage();
        $runePage->setId($object->id);
        $runePage->setCurrent($object->current);
        $runePage->setName($object->name);
        if(isset($object->slots)) {
            foreach($object->slots as $rune) {
                $runePage->addRune($this->createRune($rune));
            }
        }
        return $runePage;
    }

    /**
     * Create a Rune object
     * @param $object
     * @return Rune
     */
    private function createRune($object) {
        $rune = new Rune();
        $rune->setId($object->runeId);
        $rune->setSlotId($object->runeSlotId);
        return $rune;
    }
}