<?php

namespace BlackJack;

require_once('Player.php');

class AutoPlayer extends Player
{
  private array $AutoPlayerName= ['Jack', 'Mary', 'Johnson', 'Ronald', 'Ashley', 'Anna' ];
  private string $name;

  public function __construct()
  {
    shuffle($this->AutoPlayerName);
    $this->name = array_pop($this->AutoPlayerName);
  }

  public function GetName()
  {
    return $this->name;
  }

}
