<?php
namespace BlackJack\Tests;


require_once(__DIR__ . '/../lib/Dealer.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Dealer;
use BlackJack\Deck;

class DealerTest extends TestCase
{
  public function testFirstDrawCards()
  {
    $dealer = new Dealer();
    $deck = new Deck();
    $deck->InitDeck();
    $this->assertSame(2, count($dealer->FirstDrawCards($deck)));
  }

  public function testGetScore()
  {
    $dealer = new Dealer();
    $deck = new Deck();
    $deck->InitDeck();
    $dealer->FirstDrawCards($deck);
    $this->assertSame('integer', gettype($dealer->GetScore()));
  }
}
