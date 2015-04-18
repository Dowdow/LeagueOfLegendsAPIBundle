# LeagueOfLegendsAPIBundle

[![Build Status](https://travis-ci.org/Dowdow/LeagueOfLegendsAPIBundle.svg?branch=master)](https://travis-ci.org/Dowdow/LeagueOfLegendsAPIBundle)

The League of Legends API Bundle provides the ability to communicate with the Riot Games API : https://developer.riotgames.com/

## Installation

Add the following line in your `composer.json` file :
    
```json
"require": { 
    "dowdow/league-of-legends-api-bundle": "dev-master" 
}
```

Add the bundle in your `AppKernel.php` file :

```php
$bundles = array(
        ...
    new Dowdow\LeagueOfLegendsAPIBundle\DowdowLeagueOfLegendsAPIBundle(),
);
```

## Configuration

Add your developer API key in your `parameters.yml` file :

```yml
# app/config/parameters.yml
parameters:
    dowdow_league_of_legends_api:
        key: 054684ee6-7848-4101-this5is58my1key35bitch789
```

## Content

All these features represent different web services provided by Riot Games. Each of REST web services is represented by a Symfony service which contains a method for each available roots.

These methods return objects that are available in the Entity directory.

All objects are also doctrine entities which allows you to create your own database and thus avoids the rate limit imposed by Riot Games.

### Champion

Retrieves information about the champions status.

Get all the champion statuses :

```php
$champions = $this
    ->get('dowdow_league_of_legends_api.service_champion')
    ->getChampions(Region::EUW);
```

Get a champion status by id :

```php
$champion = $this
    ->get('dowdow_league_of_legends_api.service_champion')
    ->getChampionById(53, Region::EUW);
```

### Game

Retrieves information about the recent games of a summoner.

Get a summoner recent games :

```php
$summoner = $this
    ->get('dowdow_league_of_legends_api.service_game')
    ->getGameBySummonerId(29274653, Region::EUW);
```

### League

Retrieves information about leagues.

Get leagues from summoner ids :

```php
$array = $this
    ->get('dowdow_league_of_legends_api.service_league')
    ->getLeagueBySummonerIds(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get leagues entry from summoner ids :

```php
$array = $this
    ->get('dowdow_league_of_legends_api.service_league')
    ->getLeagueEntryBySummonerIds(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get leagues from team ids :

```php
$array = $this
    ->get('dowdow_league_of_legends_api.service_league')
    ->getLeagueByTeamIds(array('TEAM-b24a4040-b911-11e3-a3ae-782bcb4ce61a', 'TEAM-90af5320-8f7d-11e3-8ce3-782bcb497d6f'), Region::EUW);
```

Get leagues entry from team ids :

```php
$array = $this
    ->get('dowdow_league_of_legends_api.service_league')
    ->getLeagueEntryByTeamIds(array('TEAM-b24a4040-b911-11e3-a3ae-782bcb4ce61a', 'TEAM-90af5320-8f7d-11e3-8ce3-782bcb497d6f'), Region::EUW);
```

Get the challenger tier for a region and a queue type :

```php
$league = $this
    ->get('dowdow_league_of_legends_api.service_league')
    ->getChallengerTier(Region::EUW, QueueType::RANKED_SOLO_5x5);
```

### LoL Static Data

Work in progress

### LoL Status

Retrieves information about the service status.

Get all the shard status :

```php
$shards = $this
    ->get('dowdow_league_of_legends_api.service_lolstatus')
    ->getShards();
```

Get a shard status by region and incident status :

```php
$shards = $this
    ->get('dowdow_league_of_legends_api.service_lolstatus')
    ->getShardsByRegion(Region::EUW);
```

### Match

Work in progress

### Match History

Work in progress

### Stats

Work in progress

### Summoner

Retrieves information about summoner status, mastery status and runes status.

Get summoners status by summoner names :

```php
$summoners = $this
    ->get('dowdow_league_of_legends_api.service_summoner')
    ->getSummonersByNames(array('Voldamar', 'Dayke', 'palanos'), Region::EUW);
```

Get summoners status by summoner ids :

```php
$summoners = $this
    ->get('dowdow_league_of_legends_api.service_summoner')
    ->getSummonersByIds(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get summoners mastery :

```php
$summoners = $this
    ->get('dowdow_league_of_legends_api.service_summoner')
    ->getSummonersMasteries(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get summoner names by summoner ids :

```php
$names = $this
    ->get('dowdow_league_of_legends_api.service_summoner')
    ->getSummonersNames(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get summoner runes :

```php
$summoners = $this
    ->get('dowdow_league_of_legends_api.service_summoner')
    ->getSummonersRunes(array('25955715', '26916921', '29274653'), Region::EUW);
```

### Team

Retrieves information about teams.

Get team by summoner ids :

```php
 $teams = $this
    ->get('dowdow_league_of_legends_api.service_team')
    ->getTeamBySummonerIds(array('25955715', '26916921', '29274653'), Region::EUW);
```

Get team by team ids :

```php
$teams = $this
    ->get('dowdow_league_of_legends_api.service_team')
    ->getTeamByIds(array('TEAM-b24a4040-b911-11e3-a3ae-782bcb4ce61a', 'TEAM-90af5320-8f7d-11e3-8ce3-782bcb497d6f'), Region::EUW);
```