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

### デバッグ (Xdebug)

デバッグしたい時は下記の順に実施する。

1. コードにブレークポイントを設定する
2. デバッグビューを開く
3. 「Listen for Xdebug」を選択してデバッグを開始する
4. コードを実行する

ブレークポイントで止まらない場合、 `.vscode/launch.json` の port が 9003 であることを確認する。

### クラス図
<div>
https://www.plantuml.com/plantuml/svg/hL2nJWCn3Dtx5Hawb6zWARg3qe62UZ0m8PDOrPLShh9pgYh4lnCxN9IDfTjxp_9xprvp18hJu1VM0xFPm83cUs7C-7b46ytIeVswhVZ9mmMfLXo2pufwhMvaTehz6Duhl5DydDm14_hvYtj2PZX8Of7Q5AWDW0WkPYayiMteeq2rQGdE3P1Jii5vK3nafXvs31nDzxPzxGfhxlRjHzSyx--JjCDpNYwxBtfWtI2V_0Z19QqFvGcT7GcJzD0JnxaIhyGl_wskMikvjAxNhLi4_r-oFFjgoKh4FRTOOt3Ju7y1
</div>
