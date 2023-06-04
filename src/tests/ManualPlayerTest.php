<?php
namespace BlackJack\Tests;

require_once(__DIR__ . '/../lib/ManualPlayer.php');

use PHPUnit\Framework\TestCase;
use BlackJack\ManualPlayer;
use BlackJack\Deck;

class ManualPlayerTest extends TestCase
{
  public function testFirstDrawCards()
  {
    $player = new ManualPlayer('You');
    $deck = new Deck();
    $deck->InitDeck();
    $this->assertSame(2, count($player->FirstDrawCards($deck)));
  }

  public function testGetScore()
  {
    $player = new ManualPlayer('You');
    $deck = new Deck();
    $deck->InitDeck();
    $player->FirstDrawCards($deck);
    $this->assertSame('integer', gettype($player->GetScore()));
  }

  public function testGetName()
  {
    $player = new ManualPlayer('You');
    $this->assertSame('You', $player->GetName());
  }
}
