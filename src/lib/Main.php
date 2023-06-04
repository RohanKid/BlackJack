<?php
namespace BlackJack;

require_once('Game.php');

echo 'ブラックジャックを開始します プレイ人数を入力してください(1~3)' . PHP_EOL;
$PlayersNumber = (int)trim(fgets(STDIN));
$game = new Game($PlayersNumber);
$game ->start();
$score = 0;
while ($score <= 21) {
  $option = trim(fgets(STDIN));
  if ($option === "Y") {
    $score = $game->optionY();
  }
  if ($option === "N") {
    $game->optionN();
    break;
  }
}
echo 'ブラックジャックを終了します' . PHP_EOL;
