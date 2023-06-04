# BlackJack

## 目的
ディーラーとプレイヤーの2人で対戦するコンソールゲームを作成
コンソール（ターミナル）上で動作する

## ルール説明

1. 実行開始時、ディーラーとプレイヤー全員に２枚ずつカードが配られる
2. 自分のカードの合計値が21に近づくよう、カードを追加するか、追加しないかを決める
3. カードの合計値が21を超えてしまった時点で、その場で負けが確定する
4. プレイヤーはカードの合計値が21を超えない限り、好きなだけカードを追加できる
5. ディーラーはカードの合計値が17を超えるまでカードを追加する
6. 各カードの点数は次のように決まっています。

    2から9までは、書かれている数の通りの点数

    10,J,Q,Kは10点

    Aは1点あるいは11点として、手の点数が最大となる方で数える

    動作イメージは以下のようになる
    
　![コンソール画面](https://github.com/RohanKid/BlackJack/assets/127714058/3297c6d6-66a8-4070-acd9-dd8365b34102)

## 環境構築

```bash
# Docker イメージのビルド
docker-compose build

# Docker コンテナの起動
docker-compose up -d

# Docker コンテナ内でコマンドを実行する
docker-compose exec app php -v

# Docker コンテナの停止・削除
docker-compose down
```

## 環境構築 (Remote Development編)

Docker イメージをビルドする。

```bash
docker-compose build
```

VSCode の Remote-Containers: Open Folder in Container からコンテナを開く。

コマンドは VSCode のターミナルから実行する。

終了するときはコンテナを停止・削除する。

```bash
docker-compose down
```

## 追加する予定の機能
 ・プレイ人数を可変にする(1~3)

 ・チップ

    最初にプレイヤー全員に均等にチップを配る(チップ枚数は選択可)

    毎ターン賭けるチップを選択
 ・ターン制

    全プレイヤーのチップがなくなるかターン数がなくなるまでゲームを続ける

    ターンを選択できる

 ・ルール追加

    ダブリングダウン,インシュアランス,サレンダー ・・・


### クラス図
<img src="https://github.com/RohanKid/BlackJack/blob/main/out/src/PlantUML/BlackJackClassCase/Blackjack.svg" width="800">

### ユーザーケース図
<img src="https://github.com/RohanKid/BlackJack/blob/main/out/src/PlantUML/BlackJackUseCase/Blackjack.svg" width="800">

### シーケンス図
<img src="https://github.com/RohanKid/BlackJack/blob/main/out/src/PlantUML/BlackJacksiecanseCase/Blackjack.svg" width="800">


[def]: https://github.com/RohanKid/BlackJack/assets/127714058/3297c6d6-66a8-4070-acd9-dd8365b34102
