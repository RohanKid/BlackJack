# BlackJack

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

### クラス図
<img src="https://github.com/RohanKid/BlackJack/blob/main/PlantUMLsvg/src/PlantUML/BlackJackClassCase/BlackJackClassCase.svg" width="800">

### ユーザーケース図
<img src="https://github.com/RohanKid/BlackJack/blob/main/out/src/PlantUML/BlackJackUseCase/Blackjack.svg" width="800">
