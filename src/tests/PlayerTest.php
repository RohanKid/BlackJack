<?php
namespace BlackJack\Tests;


require_once(__DIR__ . '/../lib/Player.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Player;
use BlackJack\Deck;

class PlayerTest extends TestCase
{
  public function testFirstDrawCards()
  {
    $player = new Player();
    $deck = new Deck();
    $deck->InitDeck();
    $this->assertSame(2, count($player->FirstDrawCards($deck)));
  }

  public function testGetScore()
  {
    $player = new Player();
    $deck = new Deck();
    $deck->InitDeck();
    $player->FirstDrawCards($deck);
    $this->assertSame('integer', gettype($player->GetScore()));
  }
}
