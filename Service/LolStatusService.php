<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Service;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;

class LolStatusService {

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

} 