<?php
namespace BlackJack;

require_once('Game.php');

echo 'ブラックジャックを開始します' . PHP_EOL;
$game = new Game();
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
