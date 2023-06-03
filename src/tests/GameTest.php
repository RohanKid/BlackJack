<?php
namespace BlackJack\Tests;


require_once(__DIR__ . '/../lib/Game.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Game;

class GameTest extends TestCase
{
  public function testStart()
  {
    $game = new Game();

    $this->assertSame(null, $game->start());
  }

  public function testOptionY()
  {
    $game = new Game();
    $game->start();

    $this->assertSame('integer', gettype($game->optionY()));
  }

  public function testOptionN()
  {
    $game = new Game();
    $game->start();

    $this->assertSame(null, $game->optionN());
  }
}
