<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\League;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\LeagueEntry;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\MiniSeries;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Container;

class LeagueService {

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
     * Get League by Summoner ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getLeagueBySummonerIds($ids, $region) {
        $request = $this->container->getParameter('roots')['league']['leagueBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createLeaguesArray($summoners);
    }

    /**
     * Get League Entry by Summoner ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getLeagueEntryBySummonerIds($ids, $region) {
        $request = $this->container->getParameter('roots')['league']['leagueBySummonerIdsEntry'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createLeaguesArray($summoners);
    }

    /**
     * Get League by Team ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getLeagueByTeamIds($ids, $region) {
        $request = $this->container->getParameter('roots')['league']['leagueByTeamIds'];
        $request = str_replace('{teamIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createLeaguesArray($summoners);
    }

    /**
     * Get League Entry by Team ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getLeagueEntryByTeamIds($ids, $region) {
        $request = $this->container->getParameter('roots')['league']['leagueByTeamIdsEntry'];
        $request = str_replace('{teamIds}', $this->normalizeArray($ids), $request);
        $summoners = $this->caller->send($request, $region);
        return $this->createLeaguesArray($summoners);
    }

    /**
     * Get Challenger Tier for a region
     * @param $region
     * @return League
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getChallengerTier($region, $type) {
        $request = $this->container->getParameter('roots')['league']['leagueChallengerTier'];
        $league = $this->caller->send($request, $region, array('type' => $type));
        return $this->createLeague($league);
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
     * Create an array of League array
     * @param $object
     * @return array
     */
    private function createLeaguesArray($object) {
        $leaguesArray = array();
        foreach($object as $key => $value) {
            $leaguesArray[$key] = $this->createLeagues($value);
        }
        return $leaguesArray;
    }

    /**
     * Create a League array
     * @param $object
     * @return array
     */
    private function createLeagues($object) {
        $leagues = array();
        foreach($object as $value) {
            $leagues[] = $this->createLeague($value);
        }
        return $leagues;
    }

    /**
     * Create a League object
     * @param $object
     * @return League
     */
    private function createLeague($object) {
        $league = new League();
        $league->setName($object->name);
        if(isset($object->participantId)) {
            $league->setParticipantId($object->participantId);
        }
        $league->setQueue($object->queue);
        $league->setTier($object->tier);
        if(isset($object->entries)) {
            foreach($object->entries as $entry) {
                $league->addLeagueEntry($this->createLeagueEntry($entry));
            }
        }
        return $league;
    }

    /**
     * Create a LeagueEntry object
     * @param $object
     * @return LeagueEntry
     */
    private function createLeagueEntry($object) {
        $entry = new LeagueEntry();
        $entry->setDivision($object->division);
        $entry->setIsFreshBlood($object->isFreshBlood);
        $entry->setIsHotStreak($object->isHotStreak);
        $entry->setIsInactive($object->isInactive);
        $entry->setIsVeteran($object->isVeteran);
        $entry->setLeaguePoints($object->leaguePoints);
        $entry->setPlayerOrTeamId($object->playerOrTeamId);
        $entry->setPlayerOrTeamName($object->playerOrTeamName);
        $entry->setWins($object->wins);
        if(isset($object->miniSeries)) {
            $entry->setMiniseries($this->createMiniSeries($object->miniSeries));
        }
        return $entry;
    }

    /**
     * Create a MiniSeries object
     * @param $object
     * @return MiniSeries
     */
    private function createMiniSeries($object) {

        $miniSeries = new MiniSeries();
        $miniSeries->setLosses($object->losses);
        $miniSeries->setProgress($object->target);
        $miniSeries->setTarget($object->target);
        $miniSeries->setWins($object->wins);
        return $miniSeries;
    }

} 