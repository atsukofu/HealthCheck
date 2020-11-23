# README

## Health Check
<img width="1440" alt="スクリーンショット 2020-11-23 10 47 40" src="https://user-images.githubusercontent.com/62829792/99923841-f1beb780-2d7a-11eb-9e2c-a6eae3c18341.png">

このサイトは食品工場における従業員の毎日の健康チェックと記録用に作成しました。<br>
毎日のチェックが煩雑に感じないよう簡単に登録でき、保存データは日別・従業員別に見ることができます。<br>
条件に逸脱した場合（体温37.5℃以上、各チェック項目において×がついた場合）は、項目が赤色になり一目でわかるようにしています。<br>

## Description
<img width="770" alt="スクリーンショット 2020-11-23 10 58 34" src="https://user-images.githubusercontent.com/62829792/99923860-03a05a80-2d7b-11eb-8773-a47872ca6fd9.png">
<img width="774" alt="スクリーンショット 2020-11-23 10 58 50" src="https://user-images.githubusercontent.com/62829792/99923876-19158480-2d7b-11eb-9602-d323ebecb31b.png">

条件に逸脱した場合（体温37.5℃以上、各チェック項目において×がついた場合）は、<br>
項目が赤色になり一目でわかるようにしています。<br>
新型コロナウイルスの影響で企業内での従業員健康チェックが厳しくなる中、<br>
発熱者などを記録・管理しやすいようにすることを意識しました。<br>
また、新しい社員の登録も簡単に行うことができます。<br>

## Usage
$ git clone https://github.com/atsukofu/HealthCheck.git<br>
上記コマンドでダウンロードし、ローカルサーバーで起動してください。

Web上でアクセスされる場合は下記URLにアクセスしてください。<br>
アカウントを作成していただくと、アプリを使うことができます。<br>
👉 https://healthcondition.herokuapp.com/

## Test account
スタッフ名：abc@gmail.com<br>
パスワード：abcabc01<br>

## Commitment
このサイトを作る上でのこだわりは、ただ登録するだけでなく、管理もしやすくすることを目指しました。<br>
現在食品工場で働いている経験から、紙で管理されたデータの管理の大変さを痛感しています。<br>
多くの従業員の健康管理を毎日行う管理者が、容易に欲しいデータを閲覧できるようにするため、<br>
日別・従業員別両面からデータを取得できる設計にしています。<br>

## Technology Used
- laravel
- JavaScript
- My SQL
- bootstrap

## Future Plans
- 従業員別・日別データを検索できる機能を追加したいと思っています。
  管理者がより簡単にデータの検索・閲覧を行えるアプリにしたいと考えています。
