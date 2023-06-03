<?php
namespace BlackJack;

require_once('Deck.php');
require_once('Player.php');
require_once('Dealer.php');

class Game
{
  private object $deck;
  private object $player;
  private object $dealer;
  public function start()
  {
    $this->deck = new Deck();
    $this->deck->InitDeck();
    $this->player = new Player();
    $this->dealer = new Dealer();
    $playerHand = $this->player->FirstDrawCards($this->deck);
    $dealerHand = $this->dealer->FirstDrawCards($this->deck);
    $playerScore = $this->player->GetScore();
    echo 'あなたの引いたカードは' . Card::SUITS[$playerHand[0][0]] . 'の' . $playerHand[0][1] . 'です。' . PHP_EOL;
    echo 'あなたの引いたカードは' . Card::SUITS[$playerHand[1][0]] . 'の' . $playerHand[1][1] . 'です。' . PHP_EOL;
    echo 'ディーラーの引いたカードは' . Card::SUITS[$dealerHand[0][0]] . 'の' . $dealerHand[0][1] . 'です。' . PHP_EOL;
    echo 'ディーラーの引いたカードの2枚目のカードはわかりません。' . PHP_EOL;
    echo 'あなたの現在の得点は' . $playerScore . 'です。' . 'カードを引きますか？(Y/N)' . PHP_EOL;
    return;
  }

  public function optionY()
  {
    $playerHand = $this->player->DrawCard($this->deck);
    $playerScore = $this->player->GetScore();
    if ($playerScore > 21) {
      echo 'あなたの引いたカードは' . Card::SUITS[$playerHand[array_key_last($playerHand)][0]] . 'の' . $playerHand[array_key_last($playerHand)][1] . 'です。' . PHP_EOL;
      echo 'あなたの現在の得点は' . $playerScore . PHP_EOL;
      echo 'あなたの負けです！' . PHP_EOL;
      return $playerScore;
    } else {
      echo 'あなたの引いたカードは' . Card::SUITS[$playerHand[array_key_last($playerHand)][0]] . 'の' . $playerHand[array_key_last($playerHand)][1] . 'です。' . PHP_EOL;
      echo 'あなたの現在の得点は' . $playerScore . 'です。' . 'カードを引きますか？(Y/N)' . PHP_EOL;
      return $playerScore;
    }
  }

  public function optionN()
  {
    $dealerHand = $this->dealer->GetHand();
    $dealerScore = $this->dealer->GetScore();
    echo 'ディーラーの引いた2枚目のカードは' . Card::SUITS[$dealerHand[1][0]] . 'の' . $dealerHand[1][1] . 'です。' . PHP_EOL;
    while ($dealerScore < 17) {
      echo 'ディーラーの現在の得点は' . $dealerScore . 'です。' . PHP_EOL;
      $dealerHand = $this->dealer->DrawCard($this->deck);
      $dealerScore = $this->dealer->GetScore();
      echo 'ディーラーの引いたカードは' . Card::SUITS[$dealerHand[array_key_last($dealerHand)][0]] . 'の' . $dealerHand[array_key_last($dealerHand)][1] . 'です。' . PHP_EOL;
    }
    $playerScore = $this->player->GetScore();
    echo 'あなたの得点は' . $playerScore . 'です。' . PHP_EOL;
    echo 'ディーラーの得点は' . $dealerScore . 'です。' . PHP_EOL;
    echo $this->judge() . PHP_EOL;
    return;
  }
  private function judge() {
    $playerScore = $this->player->GetScore();
    $dealerScore = $this->dealer->GetScore();
    if ($playerScore > 21) {
      return 'ディーラーの勝ちです！';
    } elseif ($dealerScore > 21) {
      return 'あなたの勝ちです！';
    } elseif ($dealerScore === $playerScore) {
      return '引き分けです！';
    } elseif ($dealerScore > $playerScore) {
      return 'ディーラーの勝ちです！';
    } else {
      return 'あなたの勝ちです！';
    }
  }
}
