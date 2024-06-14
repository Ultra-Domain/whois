# WHOIS検索 PHPライブラリ
WHOIS検索 PHPライブラリは、PHPで書かれたメソッドからWHOIS サーバーへ簡単にアクセスするための手段を提供します。
## インストール方法
パッケージを変更しないならば、このソースコードは必要ありません。<br />
パッケージを使用したいだけならば、下記を実行するだけです。
```
require_once domain.php
```
## 動作環境
PHP 5.6～

このメソッドはPHPからSOCKETを利用してサーバーへ接続するメソッドである fsockopen を使用しています。
## 使い方
Karadenでテナントを作成し、プロジェクト毎に発行できるトークンを発行する必要があります。<br />
作成したテナントID（テナントIDはテナント選択画面で表示されています）は、`Config::$tenantId`に、発行したトークンは`Config::$apiKey`にそれぞれ設定します。
```php
require_once domain.php
$domain_name = 'https://domain.com'; // OR 'domain.com' only
echo whois($domain_name)
```

### タイムアウトについて
通信をする実行環境の通信速度によってはHTTP通信時にタイムアウトが発生する可能性があります。<br />
何度も同じような現象が起こる際は、サーバーの接続の調整もしくは`HTTPクライアントの明示的な指定`からHTTPクライアントの指定及びタイムアウトの時間を増やして、再度実行してください。

### 使用サイト
ウルトラドメイン [www.ultra-domain.com](https://www.ultra-domain.jp)<br>
WHOIS検索 | ウルトラドメイン　[whois.php](https://www.ultra-domain.jp/domain/whois.php)
