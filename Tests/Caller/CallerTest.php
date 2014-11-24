<?php

namespace Dowdow\LeagueOfLegendsAPIBundle\Tests\Caller;

use Dowdow\LeagueOfLegendsAPIBundle\Caller\Caller;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Symfony\Component\DependencyInjection\Container;

class CallerTest extends TestCase {

    protected $service;

    public function setUp()
    {
        $this->service = new Caller(new Container());
    }

} 