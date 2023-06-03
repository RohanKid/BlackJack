<?php
namespace BlackJack;

require_once('Card.php');

class Deck
{
  private array $Deck;

  public function InitDeck()
  {
    $cards = new Card();
    $this->Deck = $cards->NewDeck();
    return $this->Deck;
  }
  public function DrawCard()
  {
    return array_pop($this->Deck);
  }
  public function GetDeck()
  {
    return $this->Deck;
  }

}
