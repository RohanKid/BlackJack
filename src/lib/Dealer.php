<?php
namespace BlackJack;

require_once('Player.php');

class Dealer extends Player
{
  public function GetHand()
  {
    return $this->playerHand;
  }
}
