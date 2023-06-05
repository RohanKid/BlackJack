<?php
namespace BlackJack\Tests;


require_once(__DIR__ . '/../lib/Game.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Game;

class GameTest extends TestCase
{
  public function testStart()
  {
    $game = new Game(1);
    $this->assertSame([], $game->start());
    $game = new Game(2);
    $this->assertSame(1, count($game->start()));
    $game = new Game(3);
    $this->assertSame(2, count($game->start()));
  }

  public function testOptionY()
  {
    $game = new Game(3);
    $game->start();

    $this->assertSame('integer', gettype($game->optionY()));
  }

  public function testOptionN()
  {
    $game = new Game(3);
    $game->start();

    $this->assertSame(null, $game->optionN());
  }
}
