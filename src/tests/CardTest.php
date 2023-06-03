<?php
namespace BlackJack\Tests;


require_once(__DIR__ . '/../lib/Card.php');

use PHPUnit\Framework\TestCase;
use BlackJack\Card;


class CardTest extends TestCase
{
  public function testNewDeck()
  {
    $card = new Card('C', 5);
    $this->assertSame(52, count($card->NewDeck()));
  }
}
