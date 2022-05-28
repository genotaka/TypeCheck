# アプリケーション構築ガイド

<hr>  

## システム要件

本アプリケーションはlaravelをベースのFWとして動くコンテナベースのアプリケーションです。  
本アプリケーションの動作環境は以下です。
  
【サーバ要件】
- [php : ^8.1](https://laravel.com/docs/routing)
- [composer : latest](https://getcomposer.org/)
- [docker : latest](https://www.docker.com/)

<hr>  

【アプリケーション(コンテナ)構成】
- [Laravel Framework : ^9.10](https://laravel.com/docs/9.x)
- [mysql : ^8.0](https://www.mysql.com/)
- [mailhog : latest](https://github.com/mailhog/MailHog)
- [Tailwind CSS : ^3.0 (and npm)](https://tailwindcss.com/)

<hr>  

## ローカル環境構築手順

### 1. アプリケーションをローカルにダウンロードする

ソース一式は[github](https://github.com/genotaka/TypeCheck)上にあります。  
上記ページからソースを composer が実行できるディレクトリにクローンしてください。  
また、dockerが起動していることを事前に確認してください。

```shell
git clone https://github.com/genotaka/TypeCheck
```

### 2. コンテナを構築する

クローンしたソースのルートディレクトリでcomposerを使い、必要なライブラリ群を取得します。
```shell
composer install
```
composer install で vendor ディレクトリが正常に作成されたら以下のコマンドでコンテナを作成します。
```shell
sail up
```

### 3. マスタデータを構築する

コンテナが正常に稼働したら、最後にデータベースを構築します。  
DBの構築は以下のコマンドで実行します。  
```shell
sail artisan migrate:fresh --seed
```

### 4. アプリケーションにアクセスする

上記全てが正常に完了したら以下にアクセスします。
```http request
http://localhost/
```

正常にTOP画面が表示されればOKです。  
※初回は必ずアカウント作成を行ってください。
