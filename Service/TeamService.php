<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\MatchHistorySummary;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Player;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Roster;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Team;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\TeamMemberInfo;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\TeamStatDetail;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Container;

class TeamService {

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
     * Get Team by Summoner Ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getTeamBySummonerIds($ids, $region) {
        $request = $this->container->getParameter('roots')['team']['teamBySummonerIds'];
        $request = str_replace('{summonerIds}', $this->normalizeArray($ids), $request);
        $teams = $this->caller->send($request, $region);
        return $this->createTeamsArray($teams);
    }

    /**
     * Get Team by Team Ids
     * @param $ids
     * @param $region
     * @return array
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getTeamByIds($ids, $region) {
        $request = $this->container->getParameter('roots')['team']['teamByTeamIds'];
        $request = str_replace('{teamIds}', $this->normalizeArray($ids), $request);
        $teams = $this->caller->send($request, $region);
        return $this->createTeamArray($teams);
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
     * Create an array that contains Team array
     * @param $object
     * @return array
     */
    private function createTeamsArray($object) {
        $array = array();
        foreach($object as $key => $value) {
            $array[$key] = $this->createTeamArray($value);
        }
        return $array;
    }

    /**
     * Create a team array
     * @param $object
     * @return array
     */
    private function createTeamArray($object) {
        $array = array();
        foreach($object as $value) {
            $array[] = $this->createTeam($value);
        }
        return $array;
    }

    /**
     * Create a Team object
     * @param $object
     * @return Team
     */
    private function createTeam($object) {
        $team = new Team();
        $team->setCreateDate($object->createDate);
        $team->setFullId($object->fullId);
        $team->setLastGameDate($object->lastGameDate);
        $team->setLastJoinDate($object->lastJoinDate);
        $team->setLastJoinedRankedTeamQueueDate($object->lastJoinedRankedTeamQueueDate);
        $team->setModifyDate($object->modifyDate);
        $team->setName($object->name);
        $team->setSecondLastJoinDate($object->secondLastJoinDate);
        $team->setStatus($object->status);
        $team->setTag($object->tag);
        $team->setThirdLastJoinDate($object->thirdLastJoinDate);
        if(isset($object->roster)) {
            $team->setRoster($this->createRoster($object->roster));
        }
        if(isset($object->matchHistory)) {
            foreach($object->matchHistory as $value) {
                $team->addMatchHistory($this->createMatchHistorySummary($value));
            }
        }
        if(isset($object->teamStatDetail)) {
            foreach($object->teamStatDetail as $value) {
                $team->addTeamStatDetail($this->createTeamStatDetail($value));
            }
        }
        return $team;
    }

    /**
     * Create MatchHistorySummary object
     * @param $object
     * @return MatchHistorySummary
     */
    private function createMatchHistorySummary($object) {
        $matchHistorySummary = new MatchHistorySummary();
        foreach($object as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($matchHistorySummary, $method)) {
                $matchHistorySummary->$method($value);
            }
        }
        return $matchHistorySummary;
    }

    /**
     * Create a TeamStatDetail object
     * @param $object
     * @return TeamStatDetail
     */
    private function createTeamStatDetail($object) {
        $teamStatDetail = new TeamStatDetail();
        foreach($object as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($teamStatDetail, $method)) {
                $teamStatDetail->$method($value);
            }
        }
        return $teamStatDetail;
    }

    /**
     * Create a Roster object
     * @param $object
     * @return Roster
     */
    private function createRoster($object) {
        $roster = new Roster();
        $roster->setOwnerId($object->ownerId);
        if (isset($object->memberList)) {
            foreach($object->memberList as $value) {
                $roster->addMemberList($this->createTeamMemberInfo($value));
            }
        }
        return $roster;
    }

    /**
     * Create a TeamMemberInfo object
     * @param $object
     * @return TeamMemberInfo
     */
    private function createTeamMemberInfo($object) {
        $teamMemberInfo = new TeamMemberInfo();
        $teamMemberInfo->setStatus($object->status);
        $teamMemberInfo->setInviteDate($object->inviteDate);
        $teamMemberInfo->setJoinDate($object->joinDate);
        $player = new Player();
        $player->setId($object->playerId);
        $teamMemberInfo->setPlayer($player);
        return $teamMemberInfo;
    }

} 