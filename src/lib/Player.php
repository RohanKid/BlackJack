<?php

namespace BlackJack;

require_once('Deck.php');

class Player
{
  protected array $playerHand;
  protected int $playerScore;
  public function FirstDrawCards(Deck $deck)
  {
    $this->playerHand[] = $deck->DrawCard();
    $this->playerHand[] = $deck->DrawCard();

    return $this->playerHand;
  }

  public function DrawCard(Deck $deck)
  {
    $this->playerHand[] = $deck->DrawCard();
    return $this->playerHand;
  }

  public function GetScore()
  {
    $this->playerScore = 0;
    foreach ($this->playerHand as $hand) {
      $this->playerScore += Card::CARD_SCORE[$hand[1]];
    }
    foreach ($this->playerHand as $hand) {
      if($hand[1] === 'A' && $this->playerScore > 21)
      $this->playerScore -= 10;
    }
    return $this->playerScore;
  }
}
