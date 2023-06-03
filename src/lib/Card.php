<?php

namespace BlackJack;

class Card
{
  public const SUITS = ['C' => 'クラブ', 'S' => 'スペード', 'D' => 'ダイヤ', 'H' => 'ハート'];
  public const CARD_SCORE = [
    'A' => 11,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'J' => 10,
    'Q' => 10,
    'K' => 10,
  ];

  public function NewDeck()
  {
    $Deck = [];
    foreach (self::SUITS as $suit => $japanSuit) {
      foreach (self::CARD_SCORE  as $mark => $number) {
        $Deck[] = [$suit, $mark];
      }
    }
    shuffle($Deck);
    return $Deck;
  }

}
