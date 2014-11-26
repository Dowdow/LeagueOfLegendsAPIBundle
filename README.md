# LeagueOfLegendsAPIBundle

The League of Legends API Bundle provides the ability to communicate with the Riot Games API : https://developer.riotgames.com/

## Installation

You must use composer :
    
```json
"require": { 
    "dowdow/league-of-legends-api-bundle": "dev-master" 
}
```
    
## Configuration

Add your developer API key in the config.yml file :

```yml
# app/config/config.yml
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

Work in progress

### League

Work in progress

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

Work in progress