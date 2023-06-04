<?php
namespace BlackJack;

require_once('Deck.php');
require_once('ManualPlayer.php');
require_once('AutoPlayer.php');
require_once('Dealer.php');

class Game
{
  private object $deck;
  private object $ManualPlayer;
  private object $dealer;

  public function __construct(private int $PlayersNumber)
  {
  }
  public function start()
  {
    $this->deck = new Deck();
    $this->deck->InitDeck();
    $this->ManualPlayer = new ManualPlayer('You');
    $this->dealer = new Dealer();
    $ManualPlayerHand = $this->ManualPlayer->FirstDrawCards($this->deck);
    $dealerHand = $this->dealer->FirstDrawCards($this->deck);
    $ManualPlayerScore = $this->ManualPlayer->GetScore();
    echo 'Youの引いたカードは' . Card::SUITS[$ManualPlayerHand[0][0]] . 'の' . $ManualPlayerHand[0][1] . 'です。' . PHP_EOL;
    echo 'Youの引いたカードは' . Card::SUITS[$ManualPlayerHand[1][0]] . 'の' . $ManualPlayerHand[1][1] . 'です。' . PHP_EOL;
    echo 'ディーラーの引いたカードは' . Card::SUITS[$dealerHand[0][0]] . 'の' . $dealerHand[0][1] . 'です。' . PHP_EOL;
    echo 'ディーラーの引いたカードの2枚目のカードはわかりません。' . PHP_EOL;
    echo 'Youの現在の得点は' . $ManualPlayerScore . 'です。' . 'カードを引きますか？(Y/N)' . PHP_EOL;
    return;
  }

  public function optionY()
  {
    $ManualPlayerHand = $this->ManualPlayer->DrawCard($this->deck);
    $ManualPlayerScore = $this->ManualPlayer->GetScore();
    if ($ManualPlayerScore > 21) {
      echo 'Youの引いたカードは' . Card::SUITS[$ManualPlayerHand[array_key_last($ManualPlayerHand)][0]] . 'の' . $ManualPlayerHand[array_key_last($ManualPlayerHand)][1] . 'です。' . PHP_EOL;
      echo 'Youの現在の得点は' . $ManualPlayerScore . PHP_EOL;
      echo 'Youの負けです' . PHP_EOL;
      return $ManualPlayerScore;
    } else {
      echo 'Youの引いたカードは' . Card::SUITS[$ManualPlayerHand[array_key_last($ManualPlayerHand)][0]] . 'の' . $ManualPlayerHand[array_key_last($ManualPlayerHand)][1] . 'です。' . PHP_EOL;
      echo 'Youの現在の得点は' . $ManualPlayerScore . 'です。' . 'カードを引きますか？(Y/N)' . PHP_EOL;
      return $ManualPlayerScore;
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
    $ManualPlayerScore = $this->ManualPlayer->GetScore();
    $ManualPlayerName = $this->ManualPlayer->GetName();
    echo 'Youの得点は' . $ManualPlayerScore . 'です。' . PHP_EOL;
    echo 'ディーラーの得点は' . $dealerScore . 'です。' . PHP_EOL;
    echo $this->judge($ManualPlayerScore, $dealerScore, $ManualPlayerName) . PHP_EOL;
    return;
  }
  private function judge(int $playerScore, int $dealerScore, string $name) {
    if ($playerScore > 21) {
      return 'ディーラーの勝ちです！';
    } elseif ($dealerScore > 21) {
      return $name . 'の勝ちです！';
    } elseif ($dealerScore === $playerScore) {
      return '引き分けです！';
    } elseif ($dealerScore > $playerScore) {
      return 'ディーラーの勝ちです！';
    } else {
      return $name . 'の勝ちです！';
    }
  }
}
