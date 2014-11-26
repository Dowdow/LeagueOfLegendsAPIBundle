# LeagueOfLegendsAPIBundle

The League of Legends API Bundle provides the ability to communicate with the Riot Games API : https://developer.riotgames.com/

## Installation

You must use composer :

    "require": { 
      "dowdow/league-of-legends-api-bundle": "dev-master" 
    }
    
## Configuration

Add your developer API key in the config.yml file :

    # app/config/config.yml
    dowdow_league_of_legends_api:
        key: 054684ee6-7848-4101-this5is58my1key35bitch789

## Content

### Champion

Retrieves information about the champions status.

Get all the champion statuses :

    $champions = $this
            ->get('dowdow_league_of_legends_api.service_champion')
            ->getChampions(Region::EUW);

Get a champion status by id :

    $champion = $this
            ->get('dowdow_league_of_legends_api.service_champion')
            ->getChampionById(53, Region::EUW);

### Game

Work in progress

### League

Work in progress

### LoL Static Data

Work in progress

### LoL Status

Retrieves information about the service status.

Get all the shard status :

    $shards = $this
          ->get('dowdow_league_of_legends_api.service_lolstatus')
          ->getShards();

Get a shard status by region and incident status :

    $shards = $this
          ->get('dowdow_league_of_legends_api.service_lolstatus')
          ->getShardsByRegion(Region::EUW);

### Match

Work in progress

### Match History

Work in progress

### Stats

Work in progress

### Summoner

Work in progress

### Team

Work in progress
