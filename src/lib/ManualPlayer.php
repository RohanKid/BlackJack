<?php

namespace BlackJack;

require_once('Player.php');

class ManualPlayer extends Player
{
  public function __construct(private string $name)
  {

  }
  public function GetName()
  {
    return $this->name;
  }
}
