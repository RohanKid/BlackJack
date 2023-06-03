<?php
namespace BlackJack\Tests;

require_once(__DIR__ . '/../lib/Deck.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Deck;

class DeckTest extends TestCase
{
  public function testInitDeck()
  {
    $deck = new Deck();
    $this->assertSame(52, count($deck->InitDeck()));
  }

  public function testDrawCard()
  {
    $deck = new Deck();
    $this->assertSame(52, count($deck->InitDeck()));
    $this->assertSame(2, count($deck->DrawCard()));
    $this->assertSame(51, count($deck->GetDeck()));

  }

}
