<?php
namespace BlackJack;

require_once('Game.php');

echo 'ブラックジャックを開始します プレイ人数を入力してください(1~3)' . PHP_EOL;
$PlayersNumber = (int)trim(fgets(STDIN));
$game = new Game($PlayersNumber);
$game ->start();
$score = 0;
while (true) {
  $option = trim(fgets(STDIN));
  if ($option === "Y") {
    $score = $game->optionY();
    if($score > 21) {
      $game->optionN();
      break;
    }
  }
  if ($option === "N") {
    $game->optionN();
    break;
  }
}
echo 'ブラックジャックを終了します' . PHP_EOL;
