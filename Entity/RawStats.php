<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RawStats
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dowdow\LeagueOfLegendsAPIBundle\Entity\Repository\RawStatsRepository")
 */
class RawStats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="assists", type="integer")
     */
    private $assists;

    /**
     * @var integer
     *
     * @ORM\Column(name="barracksKilled", type="integer")
     */
    private $barracksKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="championsKilled", type="integer")
     */
    private $championsKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="combatPlayerScore", type="integer")
     */
    private $combatPlayerScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="consumablesPurchased", type="integer")
     */
    private $consumablesPurchased;

    /**
     * @var integer
     *
     * @ORM\Column(name="damageDealtPlayer", type="integer")
     */
    private $damageDealtPlayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="doubleKills", type="integer")
     */
    private $doubleKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="firstBlood", type="integer")
     */
    private $firstBlood;

    /**
     * @var integer
     *
     * @ORM\Column(name="gold", type="integer")
     */
    private $gold;

    /**
     * @var integer
     *
     * @ORM\Column(name="goldEarned", type="integer")
     */
    private $goldEarned;

    /**
     * @var integer
     *
     * @ORM\Column(name="goldSpent", type="integer")
     */
    private $goldSpent;

    /**
     * @var integer
     *
     * @ORM\Column(name="item0", type="integer")
     */
    private $item0;

    /**
     * @var integer
     *
     * @ORM\Column(name="item1", type="integer")
     */
    private $item1;

    /**
     * @var integer
     *
     * @ORM\Column(name="item2", type="integer")
     */
    private $item2;

    /**
     * @var integer
     *
     * @ORM\Column(name="item3", type="integer")
     */
    private $item3;

    /**
     * @var integer
     *
     * @ORM\Column(name="item4", type="integer")
     */
    private $item4;

    /**
     * @var integer
     *
     * @ORM\Column(name="item5", type="integer")
     */
    private $item5;

    /**
     * @var integer
     *
     * @ORM\Column(name="item6", type="integer")
     */
    private $item6;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemPurchased", type="integer")
     */
    private $itemPurchased;

    /**
     * @var integer
     *
     * @ORM\Column(name="killingSprees", type="integer")
     */
    private $killingSprees;

    /**
     * @var integer
     *
     * @ORM\Column(name="largestCriticalStrike", type="integer")
     */
    private $largestCriticalStrike;

    /**
     * @var integer
     *
     * @ORM\Column(name="largestKillingSpree", type="integer")
     */
    private $largestKillingSpree;

    /**
     * @var integer
     *
     * @ORM\Column(name="largestMultiKill", type="integer")
     */
    private $largestMultiKill;

    /**
     * @var integer
     *
     * @ORM\Column(name="legendaryItemsCreated", type="integer")
     */
    private $legendaryItemsCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="magicDamageDealtPlayer", type="integer")
     */
    private $magicDamageDealtPlayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="magicDamageDealtToChampions", type="integer")
     */
    private $magicDamageDealtToChampions;

    /**
     * @var integer
     *
     * @ORM\Column(name="magicDamageTaken", type="integer")
     */
    private $magicDamageTaken;

    /**
     * @var integer
     *
     * @ORM\Column(name="minionsDenied", type="integer")
     */
    private $minionsDenied;

    /**
     * @var integer
     *
     * @ORM\Column(name="minionsKilled", type="integer")
     */
    private $minionsKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="neutralMinionsKilled", type="integer")
     */
    private $neutralMinionsKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="neutralMinionsKilledEnemyJungle", type="integer")
     */
    private $neutralMinionsKilledEnemyJungle;

    /**
     * @var integer
     *
     * @ORM\Column(name="neutralMinionsKilledYourJungle", type="integer")
     */
    private $neutralMinionsKilledYourJungle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nexusKilled", type="boolean")
     */
    private $nexusKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodeCapture", type="integer")
     */
    private $nodeCapture;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodeCaptureAssist", type="integer")
     */
    private $nodeCaptureAssist;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodeNeutralize", type="integer")
     */
    private $nodeNeutralize;

    /**
     * @var integer
     *
     * @ORM\Column(name="nodeNeutralizeAssist", type="integer")
     */
    private $nodeNeutralizeAssist;

    /**
     * @var integer
     *
     * @ORM\Column(name="numDeaths", type="integer")
     */
    private $numDeaths;

    /**
     * @var integer
     *
     * @ORM\Column(name="numItemsBought", type="integer")
     */
    private $numItemsBought;

    /**
     * @var integer
     *
     * @ORM\Column(name="objectivePlayerScore", type="integer")
     */
    private $objectivePlayerScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="pentaKills", type="integer")
     */
    private $pentaKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="physicalDamageDealtPlayer", type="integer")
     */
    private $physicalDamageDealtPlayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="physicalDamageDealtToChampions", type="integer")
     */
    private $physicalDamageDealtToChampions;

    /**
     * @var integer
     *
     * @ORM\Column(name="physicalDamageTaken", type="integer")
     */
    private $physicalDamageTaken;

    /**
     * @var integer
     *
     * @ORM\Column(name="quadraKills", type="integer")
     */
    private $quadraKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="sightWardsBought", type="integer")
     */
    private $sightWardsBought;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell1Cast", type="integer")
     */
    private $spell1Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell2Cast", type="integer")
     */
    private $spell2Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell3Cast", type="integer")
     */
    private $spell3Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell4Cast", type="integer")
     */
    private $spell4Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="summonSpell1Cast", type="integer")
     */
    private $summonSpell1Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="summonSpell2Cast", type="integer")
     */
    private $summonSpell2Cast;

    /**
     * @var integer
     *
     * @ORM\Column(name="superMonsterKilled", type="integer")
     */
    private $superMonsterKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="integer")
     */
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(name="teamObjective", type="integer")
     */
    private $teamObjective;

    /**
     * @var integer
     *
     * @ORM\Column(name="timePlayed", type="integer")
     */
    private $timePlayed;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalDamageDealt", type="integer")
     */
    private $totalDamageDealt;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalDamageDealtToChampions", type="integer")
     */
    private $totalDamageDealtToChampions;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalDamageTaken", type="integer")
     */
    private $totalDamageTaken;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalHeal", type="integer")
     */
    private $totalHeal;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalPlayerScore", type="integer")
     */
    private $totalPlayerScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalScoreRank", type="integer")
     */
    private $totalScoreRank;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalTimeCrowdControlDealt", type="integer")
     */
    private $totalTimeCrowdControlDealt;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalUnitsHealed", type="integer")
     */
    private $totalUnitsHealed;

    /**
     * @var integer
     *
     * @ORM\Column(name="tripleKills", type="integer")
     */
    private $tripleKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="trueDamageDealtPlayer", type="integer")
     */
    private $trueDamageDealtPlayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="trueDamageDealtToChampions", type="integer")
     */
    private $trueDamageDealtToChampions;

    /**
     * @var integer
     *
     * @ORM\Column(name="trueDamageTaken", type="integer")
     */
    private $trueDamageTaken;

    /**
     * @var integer
     *
     * @ORM\Column(name="turretsKilled", type="integer")
     */
    private $turretsKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="unrealKills", type="integer")
     */
    private $unrealKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="victoryPointTotal", type="integer")
     */
    private $victoryPointTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="visionWardsBought", type="integer")
     */
    private $visionWardsBought;

    /**
     * @var integer
     *
     * @ORM\Column(name="wardKilled", type="integer")
     */
    private $wardKilled;

    /**
     * @var integer
     *
     * @ORM\Column(name="wardPlaced", type="integer")
     */
    private $wardPlaced;

    /**
     * @var boolean
     *
     * @ORM\Column(name="win", type="boolean")
     */
    private $win;

    /**
     * @var Game
     *
     * @ORM\OneToOne(targetEntity="Game", mappedBy="rawstats")
     */
    private $game;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set assists
     *
     * @param integer $assists
     * @return RawStats
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;

        return $this;
    }

    /**
     * Get assists
     *
     * @return integer 
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Set barracksKilled
     *
     * @param integer $barracksKilled
     * @return RawStats
     */
    public function setBarracksKilled($barracksKilled)
    {
        $this->barracksKilled = $barracksKilled;

        return $this;
    }

    /**
     * Get barracksKilled
     *
     * @return integer 
     */
    public function getBarracksKilled()
    {
        return $this->barracksKilled;
    }

    /**
     * Set championsKilled
     *
     * @param integer $championsKilled
     * @return RawStats
     */
    public function setChampionsKilled($championsKilled)
    {
        $this->championsKilled = $championsKilled;

        return $this;
    }

    /**
     * Get championsKilled
     *
     * @return integer 
     */
    public function getChampionsKilled()
    {
        return $this->championsKilled;
    }

    /**
     * Set combatPlayerScore
     *
     * @param integer $combatPlayerScore
     * @return RawStats
     */
    public function setCombatPlayerScore($combatPlayerScore)
    {
        $this->combatPlayerScore = $combatPlayerScore;

        return $this;
    }

    /**
     * Get combatPlayerScore
     *
     * @return integer 
     */
    public function getCombatPlayerScore()
    {
        return $this->combatPlayerScore;
    }

    /**
     * Set consumablesPurchased
     *
     * @param integer $consumablesPurchased
     * @return RawStats
     */
    public function setConsumablesPurchased($consumablesPurchased)
    {
        $this->consumablesPurchased = $consumablesPurchased;

        return $this;
    }

    /**
     * Get consumablesPurchased
     *
     * @return integer 
     */
    public function getConsumablesPurchased()
    {
        return $this->consumablesPurchased;
    }

    /**
     * Set damageDealtPlayer
     *
     * @param integer $damageDealtPlayer
     * @return RawStats
     */
    public function setDamageDealtPlayer($damageDealtPlayer)
    {
        $this->damageDealtPlayer = $damageDealtPlayer;

        return $this;
    }

    /**
     * Get damageDealtPlayer
     *
     * @return integer 
     */
    public function getDamageDealtPlayer()
    {
        return $this->damageDealtPlayer;
    }

    /**
     * Set doubleKills
     *
     * @param integer $doubleKills
     * @return RawStats
     */
    public function setDoubleKills($doubleKills)
    {
        $this->doubleKills = $doubleKills;

        return $this;
    }

    /**
     * Get doubleKills
     *
     * @return integer 
     */
    public function getDoubleKills()
    {
        return $this->doubleKills;
    }

    /**
     * Set firstBlood
     *
     * @param integer $firstBlood
     * @return RawStats
     */
    public function setFirstBlood($firstBlood)
    {
        $this->firstBlood = $firstBlood;

        return $this;
    }

    /**
     * Get firstBlood
     *
     * @return integer 
     */
    public function getFirstBlood()
    {
        return $this->firstBlood;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     * @return RawStats
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return integer 
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set goldEarned
     *
     * @param integer $goldEarned
     * @return RawStats
     */
    public function setGoldEarned($goldEarned)
    {
        $this->goldEarned = $goldEarned;

        return $this;
    }

    /**
     * Get goldEarned
     *
     * @return integer 
     */
    public function getGoldEarned()
    {
        return $this->goldEarned;
    }

    /**
     * Set goldSpent
     *
     * @param integer $goldSpent
     * @return RawStats
     */
    public function setGoldSpent($goldSpent)
    {
        $this->goldSpent = $goldSpent;

        return $this;
    }

    /**
     * Get goldSpent
     *
     * @return integer 
     */
    public function getGoldSpent()
    {
        return $this->goldSpent;
    }

    /**
     * Set item0
     *
     * @param integer $item0
     * @return RawStats
     */
    public function setItem0($item0)
    {
        $this->item0 = $item0;

        return $this;
    }

    /**
     * Get item0
     *
     * @return integer 
     */
    public function getItem0()
    {
        return $this->item0;
    }

    /**
     * Set item1
     *
     * @param integer $item1
     * @return RawStats
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;

        return $this;
    }

    /**
     * Get item1
     *
     * @return integer 
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * Set item2
     *
     * @param integer $item2
     * @return RawStats
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;

        return $this;
    }

    /**
     * Get item2
     *
     * @return integer 
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set item3
     *
     * @param integer $item3
     * @return RawStats
     */
    public function setItem3($item3)
    {
        $this->item3 = $item3;

        return $this;
    }

    /**
     * Get item3
     *
     * @return integer 
     */
    public function getItem3()
    {
        return $this->item3;
    }

    /**
     * Set item4
     *
     * @param integer $item4
     * @return RawStats
     */
    public function setItem4($item4)
    {
        $this->item4 = $item4;

        return $this;
    }

    /**
     * Get item4
     *
     * @return integer 
     */
    public function getItem4()
    {
        return $this->item4;
    }

    /**
     * Set item5
     *
     * @param integer $item5
     * @return RawStats
     */
    public function setItem5($item5)
    {
        $this->item5 = $item5;

        return $this;
    }

    /**
     * Get item5
     *
     * @return integer 
     */
    public function getItem5()
    {
        return $this->item5;
    }

    /**
     * Set item6
     *
     * @param integer $item6
     * @return RawStats
     */
    public function setItem6($item6)
    {
        $this->item6 = $item6;

        return $this;
    }

    /**
     * Get item6
     *
     * @return integer 
     */
    public function getItem6()
    {
        return $this->item6;
    }

    /**
     * Set itemPurchased
     *
     * @param integer $itemPurchased
     * @return RawStats
     */
    public function setItemPurchased($itemPurchased)
    {
        $this->itemPurchased = $itemPurchased;

        return $this;
    }

    /**
     * Get itemPurchased
     *
     * @return integer 
     */
    public function getItemPurchased()
    {
        return $this->itemPurchased;
    }

    /**
     * Set killingSprees
     *
     * @param integer $killingSprees
     * @return RawStats
     */
    public function setKillingSprees($killingSprees)
    {
        $this->killingSprees = $killingSprees;

        return $this;
    }

    /**
     * Get killingSprees
     *
     * @return integer 
     */
    public function getKillingSprees()
    {
        return $this->killingSprees;
    }

    /**
     * Set largestCriticalStrike
     *
     * @param integer $largestCriticalStrike
     * @return RawStats
     */
    public function setLargestCriticalStrike($largestCriticalStrike)
    {
        $this->largestCriticalStrike = $largestCriticalStrike;

        return $this;
    }

    /**
     * Get largestCriticalStrike
     *
     * @return integer 
     */
    public function getLargestCriticalStrike()
    {
        return $this->largestCriticalStrike;
    }

    /**
     * Set largestKillingSpree
     *
     * @param integer $largestKillingSpree
     * @return RawStats
     */
    public function setLargestKillingSpree($largestKillingSpree)
    {
        $this->largestKillingSpree = $largestKillingSpree;

        return $this;
    }

    /**
     * Get largestKillingSpree
     *
     * @return integer 
     */
    public function getLargestKillingSpree()
    {
        return $this->largestKillingSpree;
    }

    /**
     * Set largestMultiKill
     *
     * @param integer $largestMultiKill
     * @return RawStats
     */
    public function setLargestMultiKill($largestMultiKill)
    {
        $this->largestMultiKill = $largestMultiKill;

        return $this;
    }

    /**
     * Get largestMultiKill
     *
     * @return integer 
     */
    public function getLargestMultiKill()
    {
        return $this->largestMultiKill;
    }

    /**
     * Set legendaryItemsCreated
     *
     * @param integer $legendaryItemsCreated
     * @return RawStats
     */
    public function setLegendaryItemsCreated($legendaryItemsCreated)
    {
        $this->legendaryItemsCreated = $legendaryItemsCreated;

        return $this;
    }

    /**
     * Get legendaryItemsCreated
     *
     * @return integer 
     */
    public function getLegendaryItemsCreated()
    {
        return $this->legendaryItemsCreated;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return RawStats
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set magicDamageDealtPlayer
     *
     * @param integer $magicDamageDealtPlayer
     * @return RawStats
     */
    public function setMagicDamageDealtPlayer($magicDamageDealtPlayer)
    {
        $this->magicDamageDealtPlayer = $magicDamageDealtPlayer;

        return $this;
    }

    /**
     * Get magicDamageDealtPlayer
     *
     * @return integer 
     */
    public function getMagicDamageDealtPlayer()
    {
        return $this->magicDamageDealtPlayer;
    }

    /**
     * Set magicDamageDealtToChampions
     *
     * @param integer $magicDamageDealtToChampions
     * @return RawStats
     */
    public function setMagicDamageDealtToChampions($magicDamageDealtToChampions)
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;

        return $this;
    }

    /**
     * Get magicDamageDealtToChampions
     *
     * @return integer 
     */
    public function getMagicDamageDealtToChampions()
    {
        return $this->magicDamageDealtToChampions;
    }

    /**
     * Set magicDamageTaken
     *
     * @param integer $magicDamageTaken
     * @return RawStats
     */
    public function setMagicDamageTaken($magicDamageTaken)
    {
        $this->magicDamageTaken = $magicDamageTaken;

        return $this;
    }

    /**
     * Get magicDamageTaken
     *
     * @return integer 
     */
    public function getMagicDamageTaken()
    {
        return $this->magicDamageTaken;
    }

    /**
     * Set minionsDenied
     *
     * @param integer $minionsDenied
     * @return RawStats
     */
    public function setMinionsDenied($minionsDenied)
    {
        $this->minionsDenied = $minionsDenied;

        return $this;
    }

    /**
     * Get minionsDenied
     *
     * @return integer 
     */
    public function getMinionsDenied()
    {
        return $this->minionsDenied;
    }

    /**
     * Set minionsKilled
     *
     * @param integer $minionsKilled
     * @return RawStats
     */
    public function setMinionsKilled($minionsKilled)
    {
        $this->minionsKilled = $minionsKilled;

        return $this;
    }

    /**
     * Get minionsKilled
     *
     * @return integer 
     */
    public function getMinionsKilled()
    {
        return $this->minionsKilled;
    }

    /**
     * Set neutralMinionsKilled
     *
     * @param integer $neutralMinionsKilled
     * @return RawStats
     */
    public function setNeutralMinionsKilled($neutralMinionsKilled)
    {
        $this->neutralMinionsKilled = $neutralMinionsKilled;

        return $this;
    }

    /**
     * Get neutralMinionsKilled
     *
     * @return integer 
     */
    public function getNeutralMinionsKilled()
    {
        return $this->neutralMinionsKilled;
    }

    /**
     * Set neutralMinionsKilledEnemyJungle
     *
     * @param integer $neutralMinionsKilledEnemyJungle
     * @return RawStats
     */
    public function setNeutralMinionsKilledEnemyJungle($neutralMinionsKilledEnemyJungle)
    {
        $this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;

        return $this;
    }

    /**
     * Get neutralMinionsKilledEnemyJungle
     *
     * @return integer 
     */
    public function getNeutralMinionsKilledEnemyJungle()
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }

    /**
     * Set neutralMinionsKilledYourJungle
     *
     * @param integer $neutralMinionsKilledYourJungle
     * @return RawStats
     */
    public function setNeutralMinionsKilledYourJungle($neutralMinionsKilledYourJungle)
    {
        $this->neutralMinionsKilledYourJungle = $neutralMinionsKilledYourJungle;

        return $this;
    }

    /**
     * Get neutralMinionsKilledYourJungle
     *
     * @return integer 
     */
    public function getNeutralMinionsKilledYourJungle()
    {
        return $this->neutralMinionsKilledYourJungle;
    }

    /**
     * Set nexusKilled
     *
     * @param boolean $nexusKilled
     * @return RawStats
     */
    public function setNexusKilled($nexusKilled)
    {
        $this->nexusKilled = $nexusKilled;

        return $this;
    }

    /**
     * Get nexusKilled
     *
     * @return boolean 
     */
    public function getNexusKilled()
    {
        return $this->nexusKilled;
    }

    /**
     * Set nodeCapture
     *
     * @param integer $nodeCapture
     * @return RawStats
     */
    public function setNodeCapture($nodeCapture)
    {
        $this->nodeCapture = $nodeCapture;

        return $this;
    }

    /**
     * Get nodeCapture
     *
     * @return integer 
     */
    public function getNodeCapture()
    {
        return $this->nodeCapture;
    }

    /**
     * Set nodeCaptureAssist
     *
     * @param integer $nodeCaptureAssist
     * @return RawStats
     */
    public function setNodeCaptureAssist($nodeCaptureAssist)
    {
        $this->nodeCaptureAssist = $nodeCaptureAssist;

        return $this;
    }

    /**
     * Get nodeCaptureAssist
     *
     * @return integer 
     */
    public function getNodeCaptureAssist()
    {
        return $this->nodeCaptureAssist;
    }

    /**
     * Set nodeNeutralize
     *
     * @param integer $nodeNeutralize
     * @return RawStats
     */
    public function setNodeNeutralize($nodeNeutralize)
    {
        $this->nodeNeutralize = $nodeNeutralize;

        return $this;
    }

    /**
     * Get nodeNeutralize
     *
     * @return integer 
     */
    public function getNodeNeutralize()
    {
        return $this->nodeNeutralize;
    }

    /**
     * Set nodeNeutralizeAssist
     *
     * @param integer $nodeNeutralizeAssist
     * @return RawStats
     */
    public function setNodeNeutralizeAssist($nodeNeutralizeAssist)
    {
        $this->nodeNeutralizeAssist = $nodeNeutralizeAssist;

        return $this;
    }

    /**
     * Get nodeNeutralizeAssist
     *
     * @return integer 
     */
    public function getNodeNeutralizeAssist()
    {
        return $this->nodeNeutralizeAssist;
    }

    /**
     * Set numDeaths
     *
     * @param integer $numDeaths
     * @return RawStats
     */
    public function setNumDeaths($numDeaths)
    {
        $this->numDeaths = $numDeaths;

        return $this;
    }

    /**
     * Get numDeaths
     *
     * @return integer 
     */
    public function getNumDeaths()
    {
        return $this->numDeaths;
    }

    /**
     * Set numItemsBought
     *
     * @param integer $numItemsBought
     * @return RawStats
     */
    public function setNumItemsBought($numItemsBought)
    {
        $this->numItemsBought = $numItemsBought;

        return $this;
    }

    /**
     * Get numItemsBought
     *
     * @return integer 
     */
    public function getNumItemsBought()
    {
        return $this->numItemsBought;
    }

    /**
     * Set objectivePlayerScore
     *
     * @param integer $objectivePlayerScore
     * @return RawStats
     */
    public function setObjectivePlayerScore($objectivePlayerScore)
    {
        $this->objectivePlayerScore = $objectivePlayerScore;

        return $this;
    }

    /**
     * Get objectivePlayerScore
     *
     * @return integer 
     */
    public function getObjectivePlayerScore()
    {
        return $this->objectivePlayerScore;
    }

    /**
     * Set pentaKills
     *
     * @param integer $pentaKills
     * @return RawStats
     */
    public function setPentaKills($pentaKills)
    {
        $this->pentaKills = $pentaKills;

        return $this;
    }

    /**
     * Get pentaKills
     *
     * @return integer 
     */
    public function getPentaKills()
    {
        return $this->pentaKills;
    }

    /**
     * Set physicalDamageDealtPlayer
     *
     * @param integer $physicalDamageDealtPlayer
     * @return RawStats
     */
    public function setPhysicalDamageDealtPlayer($physicalDamageDealtPlayer)
    {
        $this->physicalDamageDealtPlayer = $physicalDamageDealtPlayer;

        return $this;
    }

    /**
     * Get physicalDamageDealtPlayer
     *
     * @return integer 
     */
    public function getPhysicalDamageDealtPlayer()
    {
        return $this->physicalDamageDealtPlayer;
    }

    /**
     * Set physicalDamageDealtToChampions
     *
     * @param integer $physicalDamageDealtToChampions
     * @return RawStats
     */
    public function setPhysicalDamageDealtToChampions($physicalDamageDealtToChampions)
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;

        return $this;
    }

    /**
     * Get physicalDamageDealtToChampions
     *
     * @return integer 
     */
    public function getPhysicalDamageDealtToChampions()
    {
        return $this->physicalDamageDealtToChampions;
    }

    /**
     * Set physicalDamageTaken
     *
     * @param integer $physicalDamageTaken
     * @return RawStats
     */
    public function setPhysicalDamageTaken($physicalDamageTaken)
    {
        $this->physicalDamageTaken = $physicalDamageTaken;

        return $this;
    }

    /**
     * Get physicalDamageTaken
     *
     * @return integer 
     */
    public function getPhysicalDamageTaken()
    {
        return $this->physicalDamageTaken;
    }

    /**
     * Set quadraKills
     *
     * @param integer $quadraKills
     * @return RawStats
     */
    public function setQuadraKills($quadraKills)
    {
        $this->quadraKills = $quadraKills;

        return $this;
    }

    /**
     * Get quadraKills
     *
     * @return integer 
     */
    public function getQuadraKills()
    {
        return $this->quadraKills;
    }

    /**
     * Set sightWardsBought
     *
     * @param integer $sightWardsBought
     * @return RawStats
     */
    public function setSightWardsBought($sightWardsBought)
    {
        $this->sightWardsBought = $sightWardsBought;

        return $this;
    }

    /**
     * Get sightWardsBought
     *
     * @return integer 
     */
    public function getSightWardsBought()
    {
        return $this->sightWardsBought;
    }

    /**
     * Set spell1Cast
     *
     * @param integer $spell1Cast
     * @return RawStats
     */
    public function setSpell1Cast($spell1Cast)
    {
        $this->spell1Cast = $spell1Cast;

        return $this;
    }

    /**
     * Get spell1Cast
     *
     * @return integer 
     */
    public function getSpell1Cast()
    {
        return $this->spell1Cast;
    }

    /**
     * Set spell2Cast
     *
     * @param integer $spell2Cast
     * @return RawStats
     */
    public function setSpell2Cast($spell2Cast)
    {
        $this->spell2Cast = $spell2Cast;

        return $this;
    }

    /**
     * Get spell2Cast
     *
     * @return integer 
     */
    public function getSpell2Cast()
    {
        return $this->spell2Cast;
    }

    /**
     * Set spell3Cast
     *
     * @param integer $spell3Cast
     * @return RawStats
     */
    public function setSpell3Cast($spell3Cast)
    {
        $this->spell3Cast = $spell3Cast;

        return $this;
    }

    /**
     * Get spell3Cast
     *
     * @return integer 
     */
    public function getSpell3Cast()
    {
        return $this->spell3Cast;
    }

    /**
     * Set spell4Cast
     *
     * @param integer $spell4Cast
     * @return RawStats
     */
    public function setSpell4Cast($spell4Cast)
    {
        $this->spell4Cast = $spell4Cast;

        return $this;
    }

    /**
     * Get spell4Cast
     *
     * @return integer 
     */
    public function getSpell4Cast()
    {
        return $this->spell4Cast;
    }

    /**
     * Set summonSpell1Cast
     *
     * @param integer $summonSpell1Cast
     * @return RawStats
     */
    public function setSummonSpell1Cast($summonSpell1Cast)
    {
        $this->summonSpell1Cast = $summonSpell1Cast;

        return $this;
    }

    /**
     * Get summonSpell1Cast
     *
     * @return integer 
     */
    public function getSummonSpell1Cast()
    {
        return $this->summonSpell1Cast;
    }

    /**
     * Set summonSpell2Cast
     *
     * @param integer $summonSpell2Cast
     * @return RawStats
     */
    public function setSummonSpell2Cast($summonSpell2Cast)
    {
        $this->summonSpell2Cast = $summonSpell2Cast;

        return $this;
    }

    /**
     * Get summonSpell2Cast
     *
     * @return integer 
     */
    public function getSummonSpell2Cast()
    {
        return $this->summonSpell2Cast;
    }

    /**
     * Set superMonsterKilled
     *
     * @param integer $superMonsterKilled
     * @return RawStats
     */
    public function setSuperMonsterKilled($superMonsterKilled)
    {
        $this->superMonsterKilled = $superMonsterKilled;

        return $this;
    }

    /**
     * Get superMonsterKilled
     *
     * @return integer 
     */
    public function getSuperMonsterKilled()
    {
        return $this->superMonsterKilled;
    }

    /**
     * Set team
     *
     * @param integer $team
     * @return RawStats
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return integer 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set teamObjective
     *
     * @param integer $teamObjective
     * @return RawStats
     */
    public function setTeamObjective($teamObjective)
    {
        $this->teamObjective = $teamObjective;

        return $this;
    }

    /**
     * Get teamObjective
     *
     * @return integer 
     */
    public function getTeamObjective()
    {
        return $this->teamObjective;
    }

    /**
     * Set timePlayed
     *
     * @param integer $timePlayed
     * @return RawStats
     */
    public function setTimePlayed($timePlayed)
    {
        $this->timePlayed = $timePlayed;

        return $this;
    }

    /**
     * Get timePlayed
     *
     * @return integer 
     */
    public function getTimePlayed()
    {
        return $this->timePlayed;
    }

    /**
     * Set totalDamageDealt
     *
     * @param integer $totalDamageDealt
     * @return RawStats
     */
    public function setTotalDamageDealt($totalDamageDealt)
    {
        $this->totalDamageDealt = $totalDamageDealt;

        return $this;
    }

    /**
     * Get totalDamageDealt
     *
     * @return integer 
     */
    public function getTotalDamageDealt()
    {
        return $this->totalDamageDealt;
    }

    /**
     * Set totalDamageDealtToChampions
     *
     * @param integer $totalDamageDealtToChampions
     * @return RawStats
     */
    public function setTotalDamageDealtToChampions($totalDamageDealtToChampions)
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;

        return $this;
    }

    /**
     * Get totalDamageDealtToChampions
     *
     * @return integer 
     */
    public function getTotalDamageDealtToChampions()
    {
        return $this->totalDamageDealtToChampions;
    }

    /**
     * Set totalDamageTaken
     *
     * @param integer $totalDamageTaken
     * @return RawStats
     */
    public function setTotalDamageTaken($totalDamageTaken)
    {
        $this->totalDamageTaken = $totalDamageTaken;

        return $this;
    }

    /**
     * Get totalDamageTaken
     *
     * @return integer 
     */
    public function getTotalDamageTaken()
    {
        return $this->totalDamageTaken;
    }

    /**
     * Set totalHeal
     *
     * @param integer $totalHeal
     * @return RawStats
     */
    public function setTotalHeal($totalHeal)
    {
        $this->totalHeal = $totalHeal;

        return $this;
    }

    /**
     * Get totalHeal
     *
     * @return integer 
     */
    public function getTotalHeal()
    {
        return $this->totalHeal;
    }

    /**
     * Set totalPlayerScore
     *
     * @param integer $totalPlayerScore
     * @return RawStats
     */
    public function setTotalPlayerScore($totalPlayerScore)
    {
        $this->totalPlayerScore = $totalPlayerScore;

        return $this;
    }

    /**
     * Get totalPlayerScore
     *
     * @return integer 
     */
    public function getTotalPlayerScore()
    {
        return $this->totalPlayerScore;
    }

    /**
     * Set totalScoreRank
     *
     * @param integer $totalScoreRank
     * @return RawStats
     */
    public function setTotalScoreRank($totalScoreRank)
    {
        $this->totalScoreRank = $totalScoreRank;

        return $this;
    }

    /**
     * Get totalScoreRank
     *
     * @return integer 
     */
    public function getTotalScoreRank()
    {
        return $this->totalScoreRank;
    }

    /**
     * Set totalTimeCrowdControlDealt
     *
     * @param integer $totalTimeCrowdControlDealt
     * @return RawStats
     */
    public function setTotalTimeCrowdControlDealt($totalTimeCrowdControlDealt)
    {
        $this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;

        return $this;
    }

    /**
     * Get totalTimeCrowdControlDealt
     *
     * @return integer 
     */
    public function getTotalTimeCrowdControlDealt()
    {
        return $this->totalTimeCrowdControlDealt;
    }

    /**
     * Set totalUnitsHealed
     *
     * @param integer $totalUnitsHealed
     * @return RawStats
     */
    public function setTotalUnitsHealed($totalUnitsHealed)
    {
        $this->totalUnitsHealed = $totalUnitsHealed;

        return $this;
    }

    /**
     * Get totalUnitsHealed
     *
     * @return integer 
     */
    public function getTotalUnitsHealed()
    {
        return $this->totalUnitsHealed;
    }

    /**
     * Set tripleKills
     *
     * @param integer $tripleKills
     * @return RawStats
     */
    public function setTripleKills($tripleKills)
    {
        $this->tripleKills = $tripleKills;

        return $this;
    }

    /**
     * Get tripleKills
     *
     * @return integer 
     */
    public function getTripleKills()
    {
        return $this->tripleKills;
    }

    /**
     * Set trueDamageDealtPlayer
     *
     * @param integer $trueDamageDealtPlayer
     * @return RawStats
     */
    public function setTrueDamageDealtPlayer($trueDamageDealtPlayer)
    {
        $this->trueDamageDealtPlayer = $trueDamageDealtPlayer;

        return $this;
    }

    /**
     * Get trueDamageDealtPlayer
     *
     * @return integer 
     */
    public function getTrueDamageDealtPlayer()
    {
        return $this->trueDamageDealtPlayer;
    }

    /**
     * Set trueDamageDealtToChampions
     *
     * @param integer $trueDamageDealtToChampions
     * @return RawStats
     */
    public function setTrueDamageDealtToChampions($trueDamageDealtToChampions)
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;

        return $this;
    }

    /**
     * Get trueDamageDealtToChampions
     *
     * @return integer 
     */
    public function getTrueDamageDealtToChampions()
    {
        return $this->trueDamageDealtToChampions;
    }

    /**
     * Set trueDamageTaken
     *
     * @param integer $trueDamageTaken
     * @return RawStats
     */
    public function setTrueDamageTaken($trueDamageTaken)
    {
        $this->trueDamageTaken = $trueDamageTaken;

        return $this;
    }

    /**
     * Get trueDamageTaken
     *
     * @return integer 
     */
    public function getTrueDamageTaken()
    {
        return $this->trueDamageTaken;
    }

    /**
     * Set turretsKilled
     *
     * @param integer $turretsKilled
     * @return RawStats
     */
    public function setTurretsKilled($turretsKilled)
    {
        $this->turretsKilled = $turretsKilled;

        return $this;
    }

    /**
     * Get turretsKilled
     *
     * @return integer 
     */
    public function getTurretsKilled()
    {
        return $this->turretsKilled;
    }

    /**
     * Set unrealKills
     *
     * @param integer $unrealKills
     * @return RawStats
     */
    public function setUnrealKills($unrealKills)
    {
        $this->unrealKills = $unrealKills;

        return $this;
    }

    /**
     * Get unrealKills
     *
     * @return integer 
     */
    public function getUnrealKills()
    {
        return $this->unrealKills;
    }

    /**
     * Set victoryPointTotal
     *
     * @param integer $victoryPointTotal
     * @return RawStats
     */
    public function setVictoryPointTotal($victoryPointTotal)
    {
        $this->victoryPointTotal = $victoryPointTotal;

        return $this;
    }

    /**
     * Get victoryPointTotal
     *
     * @return integer 
     */
    public function getVictoryPointTotal()
    {
        return $this->victoryPointTotal;
    }

    /**
     * Set visionWardsBought
     *
     * @param integer $visionWardsBought
     * @return RawStats
     */
    public function setVisionWardsBought($visionWardsBought)
    {
        $this->visionWardsBought = $visionWardsBought;

        return $this;
    }

    /**
     * Get visionWardsBought
     *
     * @return integer 
     */
    public function getVisionWardsBought()
    {
        return $this->visionWardsBought;
    }

    /**
     * Set wardKilled
     *
     * @param integer $wardKilled
     * @return RawStats
     */
    public function setWardKilled($wardKilled)
    {
        $this->wardKilled = $wardKilled;

        return $this;
    }

    /**
     * Get wardKilled
     *
     * @return integer 
     */
    public function getWardKilled()
    {
        return $this->wardKilled;
    }

    /**
     * Set wardPlaced
     *
     * @param integer $wardPlaced
     * @return RawStats
     */
    public function setWardPlaced($wardPlaced)
    {
        $this->wardPlaced = $wardPlaced;

        return $this;
    }

    /**
     * Get wardPlaced
     *
     * @return integer 
     */
    public function getWardPlaced()
    {
        return $this->wardPlaced;
    }

    /**
     * Set win
     *
     * @param boolean $win
     * @return RawStats
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return boolean 
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set game
     *
     * @param Game $game
     * @return RawStats
     */
    public function setGame(Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return Game
     */
    public function getGame()
    {
        return $this->game;
    }
}
