# debugging-app-practice

## 概要
COACHTECH Laravel実践 「10-4-6: デバッグ - ハンズオン演習」にて作成

## 使用技術
- PHP 8.5.8
- Laravel 10.50.0
- デバッグツール（`dd()`, `dump()`, `Log` ファサード）
- ミドルウェア(ルートミドルウェア)

## 学んだこと
- デバッグツールを使用したソースコード修正方法
- laravel.logへのログ出力方法
- ミドルウェアによるログ書き込み方法

## 動作確認
- ①sailコマンドによりバックグラウンドで起動(sail up -d)
- ②sailコマンドによるコンテナ状態確認(sail ps)
- ③http://localhost/users/createへアクセス
- ④下記要件を満たしていることを確認し、各ページが表示されることも確認
- (tests/Browser/screenshotsへ証跡格納済)
- 　・ /users/createにアクセスするとユーザー登録フォームが表示される
- 　・ フォーム送信時にMass Assignmentエラーが発生しない
- 　・ ユーザーがデータベースに保存される
- 　・ /usersにアクセスすると登録したユーザーが一覧に表示される
- 　・ ログにHTTPライフサイクルの流れが記録される
