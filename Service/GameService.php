<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;


use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Champion;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Game;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Player;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\RawStats;
use Dowdow\LeagueOfLegendsAPIBundle\Entity\Summoner;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Container;

class GameService {

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
     * Get 10 last Game from a Summoner id
     * @param $id
     * @param $region
     * @return Summoner
     * @throws \Symfony\Component\CssSelector\Exception\InternalErrorException
     */
    public function getGameBySummonerId($id, $region) {
        if(!is_int($id)) {
            throw new InvalidArgumentException('The "id" must be an int');
        }
        $request = $this->container->getParameter('roots')['game'];
        $request = str_replace('{summonerId}', $id, $request);
        $summoner = $this->caller->send($request, $region);
        return $this->createGames($summoner);
    }

    /**
     * Create a Summoner object that contains Game array
     * @param $object
     * @return Summoner
     */
    private function createGames($object) {
        $summoner = new Summoner();
        $summoner->setId($object->summonerId);
        if(isset($object->games)) {
            foreach($object->games as $game) {
                $summoner->addGame($this->createGame($game));
            }
        }
        return $summoner;
    }

    /**
     * Create Game object
     * @param $object
     * @return Game
     */
    private function createGame($object) {
        $game = new Game();
        $champion = new Champion();
        $champion->setId($object->championId);
        $game->setChampion($champion);
        $game->setCreateDate($object->createDate);
        $game->setGameId($object->gameId);
        $game->setGameMode($object->gameMode);
        $game->setGameType($object->gameType);
        $game->setInvalid($object->invalid);
        $game->setIpEarned($object->ipEarned);
        $game->setLevel($object->level);
        $game->setMapId($object->mapId);
        $game->setSpell1($object->spell1);
        $game->setSpell2($object->spell2);
        $game->setSubType($object->subType);
        $game->setTeamId($object->teamId);
        if(isset($object->fellowPlayers)) {
            foreach($object->fellowPlayers as $player) {
                $game->addPlayer($this->createPlayer($player));
            }
        }
        $game->setRawstats($this->createRawStats($object->stats));
        return $game;
    }

    /**
     * Create a Player object
     * @param $object
     * @return Player
     */
    private function createPlayer($object) {
        $player = new Player();
        $player->setTeamId($object->teamId);
        $summoner = new Summoner();
        $summoner->setId($object->summonerId);
        $player->setSummoner($summoner);
        $champion = new Champion();
        $champion->setId($object->championId);
        $player->setChampion($champion);
        return $player;
    }

    /**
     * Create RawStats object
     * @param $object
     * @return RawStats
     */
    private function createRawStats($object) {
        $rawstats = new RawStats();
        foreach($object as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($rawstats, $method)) {
                $rawstats->$method($value);
            }
        }
        return $rawstats;
    }

} 