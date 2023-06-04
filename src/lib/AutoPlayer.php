<?php

namespace BlackJack;

require_once('Player.php');

class AutoPlayer extends Player
{
  private array $AutoPlayerName;
  private const NAME_LIST = ['Jack', 'Mary', 'Johnson', 'Ronald', 'Ashley', 'Anna' ];

  public function __construct()
  {
    $this->AutoPlayerName = self::NAME_LIST;
    shuffle($this->AutoPlayerName);
  }

  public function GetName()
  {
    return array_pop($this->AutoPlayerName);
  }
}
