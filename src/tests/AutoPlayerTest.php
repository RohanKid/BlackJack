<?php
namespace BlackJack\Tests;

require_once(__DIR__ . '/../lib/AutoPlayer.php');

use PHPUnit\Framework\TestCase;
use BlackJack\AutoPlayer;

class AutoPlayerTest extends TestCase
{
  public function testGetName()
  {
    $player = new AutoPlayer();
    $this->assertSame('string', gettype($player->GetName()));
  }
}
