<?php
namespace BlackJack;

require_once('Deck.php');

class Dealer
{
  private array $playerHand;
  private int $dealerScore;
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
    $this->dealerScore = 0;
    foreach ($this->playerHand as $hand) {
      $this->dealerScore += Card::CARD_SCORE[$hand[1]];
    }
    foreach ($this->playerHand as $hand) {
      if($hand[1] === 'A' && $this->dealerScore > 21)
      $this->dealerScore -= 10;
    }
    return $this->dealerScore;
  }

  public function GetHand()
  {
    return $this->playerHand;
  }
}
