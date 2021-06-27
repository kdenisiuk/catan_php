<?php

namespace catan\controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use src\service;

class DiceRollController extends AbstractFOSRestController
{

    private $dice;

    public function __construct(Service\Dice\DiceRollService $dice)
    {}

    public function getDiceRollAction(Players $diceRollService)
    {

    }
}